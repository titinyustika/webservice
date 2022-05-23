@extends('admin-tmp.tmp')

@section('Author', 'sembako')

@section('isi')
<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">Data sembako
                <a class="btn btn-sm btn-primary float-right" href="{{url('add-sembako')}}">Tambah sembako</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>jenis sembako</th>
                            <th>nama sembako</th>
                            <th>jumlah sembako</th>
                            <th>exp sembako</th>
                            <th>kriteria sembako</th>
                            <th>harga sembako</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($dtsmbko as $dtambk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dtambk->jenis_sembako }}</td>
                            <td>{{ $dtambk->nama_sembako }}</td>
                            <td>{{ $dtambk->jumlah_sembako }}</td>
                            <td>{{ $dtambk->exp_sembako }}</td>
                            <td>{{ $dtambk->kriteria_sembako }}</td>
                            <td>{{ $dtambk->Harga_jual }}</td>
                            <td>
                            <form action="{{route('delete.sembako', $dtambk->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Hapus</button>
                                    <a href="{{ route('edit.sembako', $dtambk->id )}}" class="btn btn-info btn-sm">Edit</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection