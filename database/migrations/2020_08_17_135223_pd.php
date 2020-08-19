<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pds', function (Blueprint $table) {
            $table->uuid('id', 36)->primary();
            $table->string('nama');
            $table->string('gender');
            $table->string('tempat');
            $table->string('tanggal');
            $table->string('ibu');
            $table->string('nik');
            $table->string('nisn');
            $table->string('asal');
            $table->string('hp');
            $table->string('ket');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->string('prov');
            $table->string('tms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
