@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <label for="">Nama mahasiswa</label>
            <input disabled type="text" name="nama" value="{{$mhs->nama}}" class="form-control" placeholder="Nama mahasiswa" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Nomor Induk Mahasiswa</label>
            <input disabled type="text" name="nim" value="{{$mhs->nim}}" class="form-control" placeholder="Nomor Induk Mahasiswa" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Nama dosen pembimbing</label>
            <select class="form-control" name="dosen" disabled>
            @foreach($dosen as $data)
                <option value="{{$data->id}}" {{$mhs->dosen->id == $data->id ? "selected" :"" }}>{{$data->nama}}</option>
            @endforeach
            </select>
        </div>
        <a name="" id="" class="btn btn-outline-secondary" href="{{route('mahasiswa.index')}}" role="button">Kembali</a>
    </div>
@endsection