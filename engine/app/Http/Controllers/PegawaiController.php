<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;
use App\Models\Jenispegawai;
use App\Models\Pegawai;
use App\Models\Statuspegawai;
use App\Models\Agama;
use App\Models\Jeniskelamin;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('apps2023.table-pegawai', compact('pegawais')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agama = Agama::all();
        $statuspegawai = Statuspegawai::all();
        $jenispegawai = Jenispegawai::all();
        $pendidikan = Pendidikan::all();
        $jeniskelamin = Jeniskelamin::all();
        $pegawai = Pegawai::all();
        return view('apps2023.form-pegawai',compact('agama', 'statuspegawai', 'jenispegawai', 'pendidikan', 'jeniskelamin'));
      
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required',
            'nik'=> 'required',
            'jenispegawai'=> 'required',
            'statuspegawai'=> 'required',
            'unit'=> 'required',
            'sub_unit'=> 'required',
            'pendidikan'=> 'required',
            'tgl_lahir'=> 'required',
            'tmpt_lahir'=> 'required',
            'jeniskelamin'=> 'required',
            'agama'=> 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move('upload/', $gambarName);

        $pegawai = new Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->nik = $request->nik;
        $pegawai->jenispegawai = $request->jenispegawai;
        $pegawai->statuspegawai = $request->statuspegawai;
        $pegawai->unit = $request->unit;
        $pegawai->sub_unit = $request->sub_unit;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->tmpt_lahir = $request->tmpt_lahir;
        $pegawai->jeniskelamin = $request->jeniskelamin;
        $pegawai->agama = $request->agama;
        $pegawai->gambar = $gambarName;
        $pegawai->save();
        
        return redirect('/table-pegawai');
    }}

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
        $agamas = Agama::all();
        $statuspegawais = Statuspegawai::all();
        $jenispegawais = Jenispegawai::all();
        $jeniskelamins = Jeniskelamin::all();
        $pendidikans = Pendidikan::all();
        $pegawai = Pegawai::find($id);
        return view('apps2023.edit-pegawai', compact('pegawai', 'agamas', 'statuspegawais', 'jenispegawais', 'pendidikans', 'jeniskelamins'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=> 'required',
            'nik'=> 'required',
            'jenispegawai'=> 'required',
            'statuspegawai'=> 'required',
            'unit'=> 'required',
            'sub_unit'=> 'required',
            'pendidikan'=> 'required',
            'tgl_lahir'=> 'required',
            'tmpt_lahir'=> 'required',
            'jeniskelamin'=> 'required',
            'agama'=> 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->nik = $request->nik;
        $pegawai->jenispegawai = $request->jenispegawai; 
        $pegawai->statuspegawai = $request->statuspegawai; 
        $pegawai->unit = $request->unit;
        $pegawai->sub_unit = $request->sub_unit;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->tmpt_lahir = $request->tmpt_lahir;
        $pegawai->jeniskelamin = $request->jeniskelamin;
        $pegawai->agama = $request->agama;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move('upload/', $gambarName);
            $pegawai->gambar = $gambarName; // Simpan nama file gambar
        }

        $pegawai->save();

        return redirect('/table-pegawai');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::find($id);

        if ($pegawai->gambar){
            unlink('upload/'.$pegawai->gambar);
        }
        
        $pegawai->delete();
        return redirect('/table-pegawai');
    }
}