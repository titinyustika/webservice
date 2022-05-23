@extends('admin-tmp.tmp')

@section('author', 'Tambah Data sembako')

@section('isi')

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Tambah Data sembako
                <a class="btn btn-sm btn-info float-right" href="{{url('data-sembako')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{url('simpan-sembako')}}" method="POST">
                    @csrf
                    <div class="from-group">
                        <label>jenis sembako</label>
                        <input type="text" name="jenis_sembako" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>nama sembako</label>
                        <input type="text" name="nama_sembako" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>jumlah sembako</label>
                        <input type="text" name="jumlah_sembako" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>exp sembako</label>
                        <input type="text" name="exp_sembako" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>kriteria sembako</label>
                        <input type="text" name="kriteria_sembako" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>harga sembako</label>
                        <input type="text" name="harga_sembako" class="form-control">
                    </div>
                    <br><br>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    <a class="btn btn-warning float-right" href="{{url('data-sembako')}}">
                        <i class="fas fa-backward"></i>Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection