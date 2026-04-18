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
        return view('admin.forms.form', compact('form'));
    }

    public function store(Request $request)
    {
        return $this->saveForm($request, new Form());
    }

    public function edit(Form $form)
    {
        $form->load('fields');
        return view('admin.forms.form', compact('form'));
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

    private function saveForm(Request $request, Form $form)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'submit_button_text' => 'nullable|string|max:100',
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
}
