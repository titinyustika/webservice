@extends('admin-tmp.tmp')

@section('judul', 'Edit Data sembako')

@section('isi')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Edit Data sembako
                <a class="btn btn-sm btn-info float-right" href="{{url('data-sembako')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update.sembako', $id->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="from-group">
                        <label>jenis sembako</label>
                        <input type="text" name="jenis_sembako" class="form-control" value="{{ $id->jenis-sembako}}">
                    </div>

                    <div class="from-group">
                        <label>nama sembako</label>
                        <input type="text" name="nama_sembako" class="form-control" value="{{ $id->nama_sembako }}">
                    </div>

                    <div class="from-group">
                        <label>jumlah sembako</label>
                        <input type="text" name="jumlah_sembako" class="form-control" value="{{ $id->jumlah_sembako }}">
                    </div>

                    <div class="from-group">
                        <label>exp sembako</label>
                        <input type="text" name="exp_sembako" class="form-control" value="{{ $id->exp_sembako}}">
                    </div>

                    <div class="from-group">
                        <label>kriteria sembako</label>
                        <input type="text" name="kriteria_sembako" class="form-control" value="{{ $id->kriteria_sembako}}">
                    </div>

                    <div class="from-group">
                        <label>harga sembako</label>
                        <input type="text" name="harga_sembako" class="form-control" value="{{ $id->harga_sembako }}">
                    </div>

                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    <a class="btn btn-warning float-right" href="{{ url('data-sembako') }}"><i class="fas fa-backward"></i>Batal</a>
                </form>
            </div>
        </div>
    </div>
    @endsection