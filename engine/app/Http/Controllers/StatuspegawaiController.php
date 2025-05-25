<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statuspegawai;

class StatuspegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuspegawais = Statuspegawai::all();
        return view('apps2023.table-statuspegawai', compact('statuspegawais')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps2023.form-statuspegawai');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_statuspegawai' => 'required'
        ]);

        $statuspegawai = new Statuspegawai;
        $statuspegawai->nama_statuspegawai = $request->nama_statuspegawai;
        $statuspegawai->save();
        
        return redirect('/table-statuspegawai');
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
        $statuspegawai = Statuspegawai::find($id);
        return view('apps2023.edit-statuspegawai', compact('statuspegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $statuspegawai = Statuspegawai::find($id);
        $statuspegawai->nama_statuspegawai = $request->nama_statuspegawai;
        $statuspegawai->save();
        return redirect('/table-statuspegawai');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $statuspegawai = Statuspegawai::find($id);
        $statuspegawai->delete();
        return redirect('/table-statuspegawai');
    }
}