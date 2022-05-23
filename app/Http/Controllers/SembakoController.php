<?php

namespace App\Http\Controllers;
use App\Models\Sembako;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class SembakoController extends Controller
{
    //
    public function index()
    {
        $dtsmbko = Sembako::all();
        //dd($sembakodata);
        return view('sembako/index', compact('dtsmbko'));
        
  
    }

    public function create()
    {
        return view ('sembako/create');

    }

    public function store(Request $request)
    {
        //dd(request->all());

        $this->validate($request, [
            'jenis_sembako'=> 'required',
            'nama_sembako' => 'required',
            'jumlah_sembako' => 'required',
            'exp_sembako' => 'required',
            'kriteria_sembako' => 'required',
            'Harga_jual' => 'required',
        ]);
        
        Sembako::create($request->all());
        return redirect(url('data-sembako'));
    }

    public function destroy(Sembako $id)
    {
        $id->delete();
        return redirect(url('data-sembako'));
    }

    public function edit(Sembako $id)
    {
        return view('sembako.edit', compact('id'));
    
    }

    public function update(Request $request, Sembako $sembako )
    {
        $this->validate($request,[
        'jenis_sembako' => 'required unique:sembako,jenis_sembako,. $dtsmbko->id',
        'nama_sembako' => 'required',
        'jumlah_sembako' => 'required',
        'exp_sembako' => 'required',
        'kriteria_sembako' => 'required',
        'Harga_jual' => 'required',
        ]);

        $sembako->update($request->all());
        return redirect(url('data-sembako'));
    }
}