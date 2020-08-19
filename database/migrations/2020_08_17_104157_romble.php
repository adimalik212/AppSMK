<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Romble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rombles', function (Blueprint $table) {
            $table->uuid('id', 36)->primary();
            $table->string('tingkat');
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('romble');
            $table->string('walas');
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
