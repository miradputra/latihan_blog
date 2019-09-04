@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('dosen.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Nama Dosen</label>
              <input type="text" name="nama" id="" class="form-control" placeholder="Nama dosen" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">NIPD Dosen</label>
              <input type="text" name="nipd" id="" class="form-control" placeholder="NIPD dosen" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('dosen.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection