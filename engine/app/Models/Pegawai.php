<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nama',
        'nik',
        'jenispegawai',
        'statuspegawai',
        'unit',
        'sub_unit',
        'pendidikan',
        'tgl_lahir',
        'tmpt_lahir',
        'jeniskelamin',
        'agama',
        'gambar'
    ];
    public function fjenispegawai()
    {
        return $this->belongsTo(JenisPegawai::class, 'jenispegawai');
    }
    public function fstatuspegawai()
    {
        return $this->belongsTo(StatusPegawai::class, 'statuspegawai');
    }
    public function fpendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'pendidikan');
    }
    public function fjeniskelamin()
    {
        return $this->belongsTo(JenisKelamin::class, 'jeniskelamin');
    }
    public function fagama()
    {
        return $this->belongsTo(Agama::class, 'agama');
    }
}