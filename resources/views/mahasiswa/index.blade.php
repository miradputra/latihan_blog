@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Mahasiswa</h2>
        <a href="{{route('mahasiswa.create')}}" class="btn btn-outline-primary">Tambah Data</a>
    <p></p>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nama Dosen</th>
                <th>Daftar Isi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 0; @endphp
            @foreach ($mhs as $data)
            @php $no++ @endphp
                <tr>
                    <td scope="row">{{$no}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->nim}}</td>
                    <td>{{$data->dosen->nama}}</td>
                    <td>
                        <ol>
                            @foreach ($data->hobi as $item)
                                <li>{{ $item->hobi }}</li>
                            @endforeach
                        </ol>
                    </td>
                    <td>
                        <form action="{{route('mahasiswa.destroy', ['id' => $data->id])}}" method="post">
                            @csrf
                            @method('delete')

                            <a href="{{route('mahasiswa.edit', ['id' => $data->id])}}" class="btn btn-outline-primary">Edit Data</a>
                            <a href="{{route('mahasiswa.show', ['id' => $data->id])}}" class="btn btn-outline-info">Detail Data</a>
                            <button type="submit" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-outline-danger">Delete Data</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
