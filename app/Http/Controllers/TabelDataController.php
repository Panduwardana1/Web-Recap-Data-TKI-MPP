<?php

namespace App\Http\Controllers;

use App\Models\Compani;
use App\Models\Destination;
use App\Models\Tki;
use Illuminate\Http\Request;

class TabelDataController extends Controller
{
    public function index()
    {
        $dataTki = Tki::with(['compani', 'destination'])->paginate(50);
        return view('admins.all-data', compact('dataTki'));
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
            'place_of_birth' => 'required|string|max:100',
            'address_vilage' => 'required|string|max:255',
            'district' => 'required|string|max:100',
            'education' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'compani_id' => 'required|exists:compani_id',
            'destination_id' => 'required|exists:destination_id'
        ]);

        $tkiCreate = Tki::create($validate);

        return redirect()->route('admin.alldata.store')->with('Success', 'Data berhasil ditambahkan');
    }
    public function showDataTki(Tki $tki)
    {
        return view('admins.crud.tki.show', compact('tki'));
    }

    public function editDataTki(Tki $tki)
    {
        $cmp = Compani::all();
        $dest = Destination::all();
        return redirect()->route('admin.alldata.edit', compact('tki', 'cmp', 'dest'));
    }

    public function updateDataTki(Request $request, Tki $tki)
    {
        $validateUpdate = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|string|max:100',
            'address_vilage' => 'required|string|max:255',
            'district' => 'required|string|max:100',
            'education' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'compani_id' => 'required|exists:companis_id',
            'destination_id' => 'required|exists:destinations_id'
        ]);

        $tki->update($validateUpdate);
        return redirect()->route('admin.alldata')->with('Success', 'Data sudah di update');
    }

    public function destroy(Tki $tki)
    {
        $tki->delete();
        return redirect()->route('admin.alldata')->with('Success', 'Data sudah di hapus');
    }
}
