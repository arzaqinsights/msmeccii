<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FileManagerController extends Controller
{
    public function index()
    {
        $directory = public_path('uploads/files');
        
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $files = File::files($directory);
        $fileData = [];

        foreach ($files as $file) {
            $fileData[] = [
                'name' => $file->getFilename(),
                'size' => $this->formatSizeUnits($file->getSize()),
                'extension' => strtolower($file->getExtension()),
                'url' => asset('uploads/files/' . $file->getFilename()),
                'time' => $file->getMTime()
            ];
        }

        // Sort by newest first
        usort($fileData, function($a, $b) {
            return $b['time'] - $a['time'];
        });

        return view('admin.file-manager.index', compact('fileData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:51200', // 50MB max
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9_.-]/', '_', $file->getClientOriginalName());
        
        $directory = public_path('uploads/files');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $file->move($directory, $fileName);

        return response()->json([
            'success' => true,
            'url' => asset('uploads/files/' . $fileName),
            'name' => $fileName
        ]);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'filename' => 'required|string'
        ]);

        $filePath = public_path('uploads/files/' . basename($request->filename));

        if (File::exists($filePath)) {
            File::delete($filePath);
            return redirect()->back()->with('success', 'File deleted successfully.');
        }

        return redirect()->back()->with('error', 'File not found.');
    }

    private function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }
        return $bytes;
    }
}
