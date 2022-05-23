<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\model;


class Sembako extends model{
    use HasFactory;

    protected $table = 'sembako';

    protected $fillable = ['jenis_sembako', 'nama_sembako', 'jumlah_sembako', 'exp_sembako', 'kriteria_sembako', 'Harga_jual'];
}

