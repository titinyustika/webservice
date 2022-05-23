<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSembakoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sembako', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sembako');
            $table->string('nama_sembako');
            $table->string('jumlah_sembako');
            $table->string('exp_sembako');
            $table->string('kriteria_sembako');
            $table->string('Harga_jual');
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
        Schema::dropIfExists('sembako');
    }
}
