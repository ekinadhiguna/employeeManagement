<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{

    public function index()
    {
        return view('departement.index',[
            'departements' => Departement::latest()->get()
            // 'departements' => Departement::where('keterangan', 0)->get()
        ]);
    }

    public function create()
    {
        return view('departement.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'status' => 'required|max:255'
        ]);
        Departement::create($validated);
        return redirect() -> route('departement.index')->with('success', 'Data has been added!');

    }

    public function show(Departement $departement)
    {
        return view('departement.show',[
            'departement' => $departement
        ]);
    }


    public function edit(Departement $departement)
    {
        return view('departement.edit',[
            'departement' => $departement
        ]);
    }


    public function update(Request $request, Departement $departement)
    {
        $validated = $request -> validate([
            'name' => 'required|max:255',
            'status' => 'required|max:255'
        ]);

        $departement->update($validated);
        return redirect()->route('departement.index')->with('success', 'Data has been updated');

    }

    public function destroy(Departement $departement)
    {
        $departement->delete();
        return redirect()->route('departement.index')->with('success', 'Data has been deleted');
    }
}
