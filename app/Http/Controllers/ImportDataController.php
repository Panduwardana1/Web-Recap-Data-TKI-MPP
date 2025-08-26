<?php

namespace App\Http\Controllers;

use App\Exports\TkiExport;
use App\Imports\TkiImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class TkiImportExportController extends Controller
{
    public function import(Request $request) {
        $request->validate([
            'file' => 'required|mines:xsls,xls,csv|max:2048',
        ]);
        try {
            Excel::import(new TkiImport, $request->file('file'));
            return back()->with('success', 'Import Success');
        } catch(\Exception $e) {
            Log::error('Import Error : '.$e->getMessage());
            return back()->with('error', 'Terjadi Kesalahan saat Import Data');
        }
    }

    public function export(){
        return Excel::download(new TkiExport, 'tki.xlsx');
    }
}
