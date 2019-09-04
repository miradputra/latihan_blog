@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Dosen</h2>
            <a href="{{route('dosen.create')}}" class="btn btn-outline-primary">Tambah Data</a>
        <p></p>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIPD</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 0; @endphp
                @foreach ($dosen as $data)
                @php $no++ @endphp
                    <tr>
                        <td scope="row">{{$no}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->nipd}}</td>
                        <td>
                            <form action="{{route('dosen.destroy', ['id' => $data->id])}}" method="post">
                                @csrf
                                @method('delete')

                                <a href="{{route('dosen.edit', ['id' => $data->id])}}" class="btn btn-outline-primary">Edit Data</a>
                                <a href="{{route('dosen.show', ['id' => $data->id])}}" class="btn btn-outline-info">Detail Data</a>
                                <button type="submit" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-outline-danger">Delete Data</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection