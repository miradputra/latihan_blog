@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('dosen.update', ['id'=>$dosen->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="">Nama Dosen</label>
              <input type="text" value="{{$dosen->nama}}" name="nama" class="form-control" placeholder="Nama dosen" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">NIPD Dosen</label>
              <input type="text" value="{{$dosen->nipd}}" name="nipd" class="form-control" placeholder="NIPD dosen" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-outline-success">Edit Data</button>
            <a class="btn btn-outline-primary" href="{{ route('dosen.index') }}" role="button">Kembali</a>
        </form>
    </div>
@endsection