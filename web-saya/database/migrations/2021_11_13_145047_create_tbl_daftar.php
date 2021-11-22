<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_daftar', function (Blueprint $table) {
            $table->id(); //id, primary key, auto increment
            $table->string('nama_mhs');
            $table->string('nim');
            $table->string('file_ktp');
            $table->string('file_kk');
            $table->string('file_ktm');
            $table->string('file_skd');
            $table->timestamps(); //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_daftar');
    }
}
