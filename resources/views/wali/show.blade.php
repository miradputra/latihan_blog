@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <label for="">Nama mahasiswa</label>
            <input type="text" name="nama" value="{{$wali->nama}}" disabled class="form-control" placeholder="Nama mahasiswa" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Nama dosen pembimbing</label>
            <select class="form-control" name="mhs" disabled>
            @foreach($mhs as $data)
                <option value="{{$data->id}}" {{$wali->mahasiswa->id == $data->id ? "selected" :"" }}>{{$data->nama}}</option>
            @endforeach
            </select>
        </div>
        <a name="" id="" class="btn btn-outline-secondary" href="{{route('wali.index')}}" role="button">Kembali</a>
    </div>
@endsection