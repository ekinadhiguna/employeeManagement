<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('position.index',[
            'positions' => Position::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('position.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

    Position::create($validated);
    return redirect()->route('position.index')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        return view('position.show',[
            'position' => $position
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        return view('position.edit',[
            'position' => $position
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        $validated = $request -> validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $position->update($validated);
        return redirect()->route('position.index')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('position.index')->with('success', 'Data has been deleted');
    }
}
