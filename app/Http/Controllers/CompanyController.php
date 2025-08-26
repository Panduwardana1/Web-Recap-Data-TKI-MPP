<?php

namespace App\Http\Controllers;

use App\Models\Compani;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Compani::all();
        // $paginate = $company->paginate(100)->withQueryString();
        return view('admins.compani', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.crud.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string'
        ]);

        Compani::create($validate);
        return redirect()->route('admin.company')->with('success', 'Company created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Compani $company)
    {
        $company = Compani::all()->findOrFail($company);
        return view('admins.crud.company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compani $company)
    {
        return view('admins.crud.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compani $company)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string'
        ]);
        $company->update($validate);
        return redirect()->route('admin.company')->with('success', 'Company updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compani $company)
    {
        $company->delete();
        return redirect()->route('admin.company')->with('success', 'Company deleted!');
    }
}
