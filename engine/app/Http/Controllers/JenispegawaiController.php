<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenispegawai;

class JenispegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenispegawais = Jenispegawai::all();
        return view('apps2023.table-jenispegawai', compact('jenispegawais')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps2023.form-jenispegawai');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jenispegawai' => 'required'
        ]);

        $jenispegawai = new Jenispegawai;
        $jenispegawai->nama_jenispegawai = $request->nama_jenispegawai;
        $jenispegawai->save();
        
        return redirect('/table-jenispegawai');
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
        $jenispegawai = Jenispegawai::find($id);
        return view('apps2023.edit-jenispegawai', compact('jenispegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jenispegawai = Jenispegawai::find($id);
        $jenispegawai->nama_jenispegawai = $request->nama_jenispegawai;
        $jenispegawai->save();
        return redirect('/table-jenispegawai');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenispegawai = Jenispegawai::find($id);
        $jenispegawai->delete();
        return redirect('/table-jenispegawai');
    }
}
