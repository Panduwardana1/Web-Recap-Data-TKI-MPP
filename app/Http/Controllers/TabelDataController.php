<?php

namespace App\Http\Controllers;

use App\Models\Tki;
use App\Models\Compani;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TabelDataController extends Controller
{
    public function index(Request $request)
    {
        $query = Tki::with(['compani', 'destination'])->orderBy('created_at', 'desc');

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($sub) use ($q) {
                $sub->where('name', 'like', "%{$q}%")
                    ->orWhere('nik', 'like', "%{$q}%");
            });
        }

        $dataTki = $query->paginate(25)->withQueryString();

        return view('admins.all-data', compact('dataTki'));
    }

    public function createDataTki()
    {
        $compani = Compani::all();
        $dest = Destination::all();
        $educationOptions = ['SD', 'SMP', 'SMA', 'SLTP', 'SLTA', 'AK1'];

        return view('admins.crud.tki.create', compact('compani', 'dest', 'educationOptions'));
    }

    public function storeData(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|string|max:20|unique:tkis,nik',
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'address_vilage' => 'required|string|max:50',
            'district' => 'required|string|max:100',
            'education' => 'required|in:SD,SMP,SMA,SLTP,SLTA,AK1',
            'phone' => 'nullable|string|max:20',
            'compani_id' => 'required|exists:companis,id',
            'destination_id' => 'required|exists:destinations,id'
        ]);

        Tki::create($validate);

        return redirect()->route('admin.alldata')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function showDataTki($id)
    {
        $tki = Tki::with(['compani', 'destination'])->findOrFail($id);
        return view('admins.crud.tki.show', compact('tki'));
    }

    public function editDataTki(Request $request, $id)
    {
        $tki = Tki::findOrFail($id);
        $compani = Compani::all();
        $dest = Destination::all();
        $educationOptions = ['SD', 'SMP', 'SMA', 'SLTP', 'SLTA', 'AK1'];

        if ($request->ajax()) {
            return view('admins.crud.tki.edit', compact('tki'));
        }

        return view('admins.crud.tki.edit', compact('tki', 'compani', 'dest', 'educationOptions'));
    }

    public function updateDataTki(Request $request, Tki $tki)
    {

        $validateUpdate =  $request->validate([
            'name' => 'required|string|max:255',
            'nik' => [
                'required',
                'string',
                'max:20',
                Rule::unique('tkis', 'nik')->ignore($tki->id),
            ],
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'address_vilage' => 'required|string|max:50',
            'district' => 'required|string|max:100',
            'education' => 'required|in:SD,SMP,SMA,SLTP,SLTA,AK1',
            'phone' => 'nullable|string|max:20',
            'compani_id' => 'required|exists:companis,id',
            'destination_id' => 'required|exists:destinations,id',
        ]);


        $tki->update($validateUpdate);

        return redirect()->route('admin.alldata')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Tki $tki)
    {
        $tki->delete();
        return redirect()->route('admin.alldata')->with('success', 'Data berhasil dihapus');
    }
}
