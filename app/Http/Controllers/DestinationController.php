<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination = Destination::all();
        return view('admins.destination', compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.crud.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'country_name' => 'required|string',
        ]);

        Destination::create($validate);
        return redirect()->route('admin.destination')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return view('admins.crud.destination.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        return view('admins.crud.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        $validate = $request->validate([
            'country_name' => 'required|string',
        ]);

        $destination->update($validate);
        // dd($destination);
        return redirect()->route('admin.destination')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('admin.destination')->with('success', 'Data telah di hapus');
    }
}
