<?php

namespace App\Http\Controllers;

use Exception;
use App\Exports\TkiExport;
use App\Imports\TkiImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;

class TkiImportExportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv|max:2048',
        ]);
        try {
            Excel::import(new TkiImport, $request->file('file'));
            return back()->with('success', 'Import Success');
        } catch (ValidationException $e) {
            $failures = $e->failures();
            $messages = [];
            foreach ($failures as $failure) {
                $messages[] = 'Baris ' . $failure->row() . ': ' . implode(', ', $failure->errors());
            }
            return back()->with('error', implode('<br>', $messages));
        } catch (\Exception $e) {
            Log::error('Import Error : ' . $e->getMessage());
            return back()->with('error', 'Format file tidak sesuai atau terjadi kesalahan saat import data.');
        }
    }

    public function export()
    {
        return Excel::download(new TkiExport, 'tki.xlsx');
    }
}
