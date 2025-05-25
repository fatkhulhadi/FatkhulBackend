<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeniskelamin;

class JeniskelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jeniskelamins = Jeniskelamin::all();
        return view('apps2023.table-jeniskelamin', compact('jeniskelamins')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps2023.form-jeniskelamin');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jeniskelamin' => 'required'
        ]);

        $jeniskelamin = new Jeniskelamin;
        $jeniskelamin->nama_jeniskelamin = $request->nama_jeniskelamin;
        $jeniskelamin->save();
        
        return redirect('/table-jeniskelamin');
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
        $jeniskelamin = Jeniskelamin::find($id);
        return view('apps2023.edit-jeniskelamin', compact('jeniskelamin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jeniskelamin = Jeniskelamin::find($id);
        $jeniskelamin->nama_jeniskelamin = $request->nama_jeniskelamin;
        $jeniskelamin->save();
        return redirect('/table-jeniskelamin');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jeniskelamin = Jeniskelamin::find($id);
        $jeniskelamin->delete();
        return redirect('/table-jeniskelamin');
    }
}

