<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::withCount('fields')->latest()->paginate(10);
        return view('admin.forms.index', compact('forms'));
    }

    public function create()
    {
        $form = new Form();
        $invoiceTemplates = \App\Models\InvoiceTemplate::all();
        $events = \App\Models\Event::where('status', 'published')->select('id', 'title')->get();
        return view('admin.forms.form', compact('form', 'invoiceTemplates', 'events'));
    }

    public function store(Request $request)
    {
        return $this->saveForm($request, new Form());
    }

    public function edit(Form $form)
    {
        $form->load('fields');
        $invoiceTemplates = \App\Models\InvoiceTemplate::all();
        $events = \App\Models\Event::where('status', 'published')->select('id', 'title')->get();
        return view('admin.forms.form', compact('form', 'invoiceTemplates', 'events'));
    }

    public function update(Request $request, Form $form)
    {
        return $this->saveForm($request, $form);
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('admin.forms.index')->with('success', 'Form deleted successfully.');
    }

    public function duplicate(Form $form)
    {
        $newForm = $form->replicate();
        $newForm->name = $newForm->name . ' (Copy)';
        $newForm->slug = \Illuminate\Support\Str::slug($newForm->name) . '-' . time();
        $newForm->status = 'draft';
        $newForm->is_hidden = $form->is_hidden;
        $newForm->force_manual_payment = $form->force_manual_payment;
        $newForm->save();

        foreach ($form->fields as $field) {
            $newField = $field->replicate();
            $newField->form_id = $newForm->id;
            $newField->field_identifier = (string) \Illuminate\Support\Str::uuid();
            $newField->save();
        }

        return redirect()->route('admin.forms.edit', $newForm)->with('success', 'Form duplicated successfully. You can now edit the duplicate.');
    }

    private function saveForm(Request $request, Form $form)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'submit_button_text' => 'nullable|string|max:100',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|image|max:2048',
        ]);

        $form->name = $request->name;
        $form->slug = $request->slug ?: \Illuminate\Support\Str::slug($request->name);
        $form->description = $request->description;
        $form->submit_button_text = $request->submit_button_text ?: 'Submit';
        $form->thank_you_message = $request->thank_you_message;
        $form->status = $request->status ?: 'draft';
        $form->invoice_prefix = $request->invoice_prefix ?: 'MSME-';
        $form->invoice_details = $request->invoice_details;
        $form->invoice_terms = $request->invoice_terms;
        $form->invoice_template_id = $request->invoice_template_id;
        $form->og_title = $request->og_title;
        $form->og_description = $request->og_description;
        $form->is_hidden = $request->boolean('is_hidden');
        $form->force_manual_payment = $request->boolean('force_manual_payment');
        
        // Process Main Thumbnail
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_thumb_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/forms'), $filename);
            $form->thumbnail = '/uploads/forms/' . $filename;
        }

        // Process Invoice Logo
        if ($request->hasFile('invoice_logo')) {
            $file = $request->file('invoice_logo');
            $filename = time() . '_inv_logo_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/forms'), $filename);
            $form->invoice_logo = '/uploads/forms/' . $filename;
        }

        // Process OG Image
        if ($request->hasFile('og_image')) {
            $file = $request->file('og_image');
            $filename = time() . '_og_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/forms'), $filename);
            $form->og_image = '/uploads/forms/' . $filename;
        }

        $form->save();

        if ($request->has('fields_data')) {
            $fields = json_decode($request->fields_data, true);
            $form->fields()->delete();
            
            if (is_array($fields) && count($fields) > 0) {
                foreach ($fields as $index => $field) {
                    $optionsToSave = null;
                    if (isset($field['dependency_mode']) && $field['dependency_mode'] === 'options' && isset($field['mapped_options'])) {
                        $mapped = [];
                        foreach ($field['mapped_options'] as $parentVal => $childOptionsString) {
                            $mapped[$parentVal] = is_array($childOptionsString) ? $childOptionsString : array_filter(array_map('trim', explode(',', $childOptionsString)));
                        }
                        $optionsToSave = $mapped;
                    } else if (isset($field['options'])) {
                        $optionsToSave = $field['options']; // Alpine already sends it as structured array/object
                    }

                    $form->fields()->create([
                        'field_identifier' => $field['id'] ?? (string) \Illuminate\Support\Str::uuid(),
                        'label' => $field['label'] ?? 'Untitled Field',
                        'type' => $field['type'],
                        'placeholder' => $field['placeholder'] ?? null,
                        'is_required' => $field['is_required'] ?? false,
                        'options' => $optionsToSave,
                        'depends_on' => $field['depends_on'] ?? null,
                        'depends_on_value' => (isset($field['dependency_mode']) && $field['dependency_mode'] === 'options') ? '__MAPPED__' : ($field['depends_on_value'] ?? null),
                        'base_amount' => $field['base_amount'] ?? null,
                        'tax_percentage' => $field['tax_percentage'] ?? null,
                        'order' => $index,
                    ]);
                }
            }
        }

        return redirect()->route('admin.forms.index')->with('success', 'Dynamic form configuration saved.');
    }

    public function export(Form $form)
    {
        $form->load('fields');

        // Dynamically get actual columns in forms table, ignoring id, timestamps, soft deletes
        $formColumns = array_filter(
            \Illuminate\Support\Facades\Schema::getColumnListing('forms'),
            fn($c) => !in_array($c, ['id', 'created_at', 'updated_at', 'deleted_at'])
        );

        // Dynamically get actual columns in form_fields table, ignoring id, form_id, timestamps
        $fieldColumns = array_filter(
            \Illuminate\Support\Facades\Schema::getColumnListing('form_fields'),
            fn($c) => !in_array($c, ['id', 'form_id', 'created_at', 'updated_at'])
        );

        // Helper to format values for SQL
        $formatSqlValue = function ($val) {
            if ($val === null) {
                return 'NULL';
            }
            if (is_bool($val)) {
                return $val ? '1' : '0';
            }
            if (is_array($val) || is_object($val)) {
                $val = json_encode($val);
            }
            if (is_numeric($val) && !is_string($val)) {
                return $val;
            }
            
            // Escape string for SQL insert
            $escaped = str_replace(
                ["\\", "'", "\r", "\n", "\t"],
                ["\\\\", "\\'", "\\r", "\\n", "\\t"],
                $val
            );
            return "'" . $escaped . "'";
        };

        // 1. Build Form SQL Insert
        $formColsSql = implode(', ', array_map(fn($c) => "`$c`", $formColumns));
        $formValsSql = implode(', ', array_map(fn($c) => $formatSqlValue($form->$c), $formColumns));
        
        $sql = "-- MSMECCII Dynamic Form Builder Export\n";
        $sql .= "-- Form: " . $form->name . "\n";
        $sql .= "-- Generated: " . now()->toDateTimeString() . "\n\n";
        
        $sql .= "INSERT INTO `forms` ($formColsSql) VALUES ($formValsSql);\n\n";
        
        $sql .= "SET @form_id = LAST_INSERT_ID();\n\n";

        // 2. Build Form Fields SQL Insert
        foreach ($form->fields as $field) {
            $fieldVals = ['@form_id'];
            foreach ($fieldColumns as $col) {
                $fieldVals[] = $formatSqlValue($field->$col);
            }
            $fieldColsSql = "`form_id`, " . implode(', ', array_map(fn($c) => "`$c`", $fieldColumns));
            $fieldValsSql = implode(', ', $fieldVals);
            $sql .= "INSERT INTO `form_fields` ($fieldColsSql) VALUES ($fieldValsSql);\n";
        }

        // 3. Add JSON block inside comments for perfect application-level parsing/restoration
        $jsonData = [
            'version' => '1.0',
            'form' => $form->only($formColumns),
            'fields' => $form->fields->map(fn($field) => $field->only($fieldColumns))->toArray()
        ];
        
        $sql .= "\n\n-- JSON_START\n";
        $sql .= "-- " . base64_encode(json_encode($jsonData)) . "\n";
        $sql .= "-- JSON_END\n";

        $filename = \Illuminate\Support\Str::slug($form->name) . '_form_export_' . date('Ymd_His') . '.sql';

        return response($sql, 200, [
            'Content-Type' => 'application/sql',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ]);
    }

    public function import(Request $request)
    {
        $request->validate([
            'sql_file' => 'required|file|max:5120',
        ]);

        $content = file_get_contents($request->file('sql_file')->path());
        $jsonData = null;

        // Try decoding from the JSON block inside comments first (primary, type-safe method)
        if (preg_match('/-- JSON_START\s*--\s*([a-zA-Z0-9+\/=\s]+)\s*-- JSON_END/s', $content, $matches)) {
            $base64 = preg_replace('/\s+/', '', $matches[1]);
            $decoded = base64_decode($base64);
            if ($decoded) {
                $jsonData = json_decode($decoded, true);
            }
        }

        // Fallback: Parse raw SQL queries if JSON block isn't present
        if (!$jsonData) {
            $formColumns = [];
            $fieldsList = [];
            
            $lines = explode("\n", $content);
            foreach ($lines as $line) {
                $line = trim($line);
                if (empty($line) || str_starts_with($line, '--') || str_starts_with($line, '#')) {
                    continue;
                }
                
                // Match Form Insert
                if (preg_match('/INSERT\s+INTO\s+`?forms`?\s*\(([^)]+)\)\s*VALUES\s*\((.+)\);/i', $line, $matches)) {
                    $colsStr = $matches[1];
                    $valsStr = $matches[2];
                    
                    $cols = array_map(fn($c) => trim($c, " `\"'"), explode(',', $colsStr));
                    $vals = $this->parseSqlValues($valsStr);
                    
                    $formColumns = array_combine($cols, $vals);
                }
                
                // Match Fields Insert
                if (preg_match('/INSERT\s+INTO\s+`?form_fields`?\s*\(([^)]+)\)\s*VALUES\s*\((.+)\);/i', $line, $matches)) {
                    $colsStr = $matches[1];
                    $valsStr = $matches[2];
                    
                    $cols = array_map(fn($c) => trim($c, " `\"'"), explode(',', $colsStr));
                    $vals = $this->parseSqlValues($valsStr);
                    
                    $fieldsList[] = array_combine($cols, $vals);
                }
            }
            
            if ($formColumns) {
                $jsonData = [
                    'form' => $formColumns,
                    'fields' => $fieldsList
                ];
            }
        }

        if ($jsonData && isset($jsonData['form'])) {
            $formData = $jsonData['form'];
            
            // Get actual database columns for the 'forms' table to filter out any non-existent columns (like invoice_logo)
            $dbFormColumns = \Illuminate\Support\Facades\Schema::getColumnListing('forms');
            $formData = array_intersect_key($formData, array_flip($dbFormColumns));
            
            // Clean up attributes that shouldn't be hardcoded
            unset($formData['id']);
            unset($formData['created_at']);
            unset($formData['updated_at']);
            unset($formData['deleted_at']);
            
            // Ensure unique slug
            $slug = $formData['slug'] ?? \Illuminate\Support\Str::slug($formData['name'] ?? 'Imported Form');
            $originalSlug = $slug;
            $count = 1;
            while (Form::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            $formData['slug'] = $slug;

            // Handle double JSON encoding safety
            if (isset($formData['invoice_details']) && is_string($formData['invoice_details'])) {
                $decoded = json_decode($formData['invoice_details'], true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $formData['invoice_details'] = $decoded;
                }
            }

            // Create new Form
            $newForm = Form::create($formData);
            
            // Create Fields
            if (isset($jsonData['fields']) && is_array($jsonData['fields'])) {
                $dbFieldColumns = \Illuminate\Support\Facades\Schema::getColumnListing('form_fields');
                foreach ($jsonData['fields'] as $fieldData) {
                    // Filter out any columns that don't actually exist in the database table
                    $fieldData = array_intersect_key($fieldData, array_flip($dbFieldColumns));
                    
                    unset($fieldData['id']);
                    unset($fieldData['created_at']);
                    unset($fieldData['updated_at']);
                    unset($fieldData['deleted_at']);
                    
                    $fieldData['form_id'] = $newForm->id;
                    
                    if (isset($fieldData['options']) && is_string($fieldData['options'])) {
                        $decodedOptions = json_decode($fieldData['options'], true);
                        if (json_last_error() === JSON_ERROR_NONE) {
                            $fieldData['options'] = $decodedOptions;
                        }
                    }
                    
                    \App\Models\FormField::create($fieldData);
                }
            }
            
            return redirect()->route('admin.forms.index')->with('success', 'Form imported and built successfully!');
        }

        return redirect()->route('admin.forms.index')->with('error', 'Invalid SQL file or form structure could not be parsed.');
    }

    private function parseSqlValues($valuesStr)
    {
        $values = [];
        $length = strlen($valuesStr);
        $inString = false;
        $currentVal = '';
        
        for ($i = 0; $i < $length; $i++) {
            $char = $valuesStr[$i];
            
            if ($inString) {
                if ($char === "'" && ($i === 0 || $valuesStr[$i - 1] !== '\\')) {
                    $inString = false;
                } else {
                    $currentVal .= $char;
                }
            } else {
                if ($char === "'") {
                    $inString = true;
                } elseif ($char === ',') {
                    $values[] = $this->sanitizeSqlValue(trim($currentVal));
                    $currentVal = '';
                } else {
                    $currentVal .= $char;
                }
            }
        }
        
        // Add last value
        $values[] = $this->sanitizeSqlValue(trim($currentVal));
        
        return $values;
    }

    private function sanitizeSqlValue($val)
    {
        if (strcasecmp($val, 'NULL') === 0) {
            return null;
        }
        // Remove enclosing single quotes if they remain
        if (str_starts_with($val, "'") && str_ends_with($val, "'")) {
            $val = substr($val, 1, -1);
        }
        // Unescape single quotes and other characters
        $val = str_replace(["\\'", '\\"', '\\\\'], ["'", '"', '\\'], $val);
        
        return $val;
    }
}
