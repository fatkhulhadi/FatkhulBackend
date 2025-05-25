<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pegawai', function (Blueprint $table) {
            $table->unsignedBigInteger('jenispegawai');
            $table->unsignedBigInteger('statuspegawai');
            $table->unsignedBigInteger('pendidikan');
            $table->unsignedBigInteger('jeniskelamin');
            $table->unsignedBigInteger('agama');

            $table->foreign('jenispegawai')->references('id')->on('jenispegawai');
            $table->foreign('statuspegawai')->references('id')->on('statuspegawai');
            $table->foreign('pendidikan')->references('id')->on('pendidikan');
            $table->foreign('jeniskelamin')->references('id')->on('jeniskelamin');
            $table->foreign('agama')->references('id')->on('agama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pegawai', function (Blueprint $table) {
            //
        });
    }
};