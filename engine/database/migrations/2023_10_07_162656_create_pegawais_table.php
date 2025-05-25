<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nik');
            $table->string('jenispegawai');
            $table->string('statuspegawai');
            $table->string('unit');
            $table->string('sub_unit');
            $table->string('pendidikan');
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir');
            $table->string('jeniskelamin');
            $table->string('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};