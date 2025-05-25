<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agamas = Agama::all();
        return view('apps2023.table', compact('agamas')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps2023.form');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_agama' => 'required'
        ]);

        $agama = new Agama;
        $agama->nama_agama = $request->nama_agama;
        $agama->save();
        
        return redirect('/table');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agama = Agama::find($id);
        return view('apps2023.edit', compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agama = Agama::find($id);
        $agama->nama_agama = $request->nama_agama;
        $agama->save();
        return redirect('/table');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agama = Agama::find($id);
        $agama->delete();
        return redirect('/table');
    }
}