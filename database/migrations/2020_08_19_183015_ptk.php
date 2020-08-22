<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ptk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptks', function (Blueprint $table) {
            $table->uuid('id', 36)->primary();
            $table->string('nama');
            $table->string('gender');
            $table->string('tempat');
            $table->string('tanggal');
            $table->string('ibu');
            $table->string('nik');
            $table->string('hp');
            $table->string('email');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->string('prov');
            $table->string('tmt');
            $table->string('img');
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
