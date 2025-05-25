<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikans = Pendidikan::all();
        return view('apps2023.table-pendidikan', compact('pendidikans')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps2023.form-pendidikan');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pendidikan' => 'required'
        ]);

        $pendidikan = new Pendidikan;
        $pendidikan->nama_pendidikan = $request->nama_pendidikan;
        $pendidikan->save();
        
        return redirect('/table-pendidikan');
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
        $pendidikan = Pendidikan::find($id);
        return view('apps2023.edit-pendidikan', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pendidikan = Pendidikan::find($id);
        $pendidikan->nama_pendidikan = $request->nama_pendidikan;
        $pendidikan->save();
        return redirect('/table-pendidikan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();
        return redirect('/table-pendidikan');
    }
}