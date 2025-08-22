<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelDataController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Tabel Data';
        return view('admins.tabel-adata', compact(
            'title'
        ));
    }
}
