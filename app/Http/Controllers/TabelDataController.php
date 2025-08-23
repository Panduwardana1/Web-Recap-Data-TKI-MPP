<?php

namespace App\Http\Controllers;

use App\Models\Compani;
use App\Models\Destination;
use App\Models\Tki;
use Illuminate\Http\Request;
use Psy\VersionUpdater\SelfUpdate;

class TabelDataController extends Controller
{
    public function index()
    {
        $dataTki = Tki::with(['compani', 'destination'])->paginate(50);
        return view('admins.tabel-adata', compact('dataTki'));
    }

    public function createDataTki()
    {
        $cmp = Compani::all();
        $dest = Destination::all();

        return view('admins.crud.tki.create', compact('cmp', 'dest'));
    }

    public function storeData(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|date',
            'address_vilage' => 'required|string',
            'district' => 'required|max:100',
            'education' => 'required|string',
            'phone' => 'required|null',
            'compani_id' => 'required|exists:compani_id',
            'destination_id' => 'destination_id'
        ]);

        $tkiCreate = Tki::create($validate);

        return redirect()->route('admin.tabeldata')->with('Success', 'Data berhasil ditambahkan');
    }
    public function showDataTki(Tki $tki)
    {
        return view('admins.tabel-adata', compact('tki'));
    }

    public function editDataTki(Tki $tki)
    {
        $cmp = Compani::all();
        $dest = Destination::all();
        return redirect()->route('admin.tabeldata', compact('tki', 'cmp', 'dest'));
    }

    public function updateDataTki(Request $request, Tki $tki)
    {
        $validateUpdate = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|date',
            'address_vilage' => 'required|string',
            'district' => 'required|max:100',
            'education' => 'required|string',
            'phone' => 'required|null',
            'compani_id' => 'required|exists:compani_id',
            'destination_id' => 'destination_id'
        ]);

        $tki->update($validateUpdate);
        return redirect()->route('admin.tabeldata')->with('Success', 'Data sudah di update');
    }

    public function destroy(Tki $tki){
        $tki->delete();
        return redirect()->route('admin.tabeldata')->with('Success', 'Data sudah di hapus');
    }
}
