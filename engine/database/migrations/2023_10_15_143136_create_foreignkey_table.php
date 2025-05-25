<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->foreign('jenispegawai')->references('id')->on('jenispegawai');
            $table->foreign('statuspegawai')->references('id')->on('statuspegawai');
            $table->foreign('pendidikan')->references('id')->on('pendidikan');
            $table->foreign('jeniskelamin')->references('id')->on('jeniskelamin');
            $table->foreign('agama')->references('id')->on('agama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
      
    }
};
