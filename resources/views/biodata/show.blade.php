@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <label for="">Nama</label>
            <input disabled value="{{ $bio->nama }}" type="text" name="nama" id="" class="form-control" placeholder="Nama Lengkap" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="5" disabled class="form-control">{{ $bio->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Tanggal lahir</label>
            <input disabled value="{{ $bio->tanggal_lahir }}" type="date" name="tanggal_lahir" id="" class="form-control" placeholder="Tanggal Lahir" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <img src="{{ asset('assets/img/biodata/'.$bio->foto) }}" alt="" id="preview" style="width: 30%; height: 30%;">
        </div>
        <button type="submit" class="btn btn-outline-success">Simpan</button>
        <a name="" id="" class="btn btn-outline-secondary" href="{{route('biodata.index')}}" role="button">Kembali</a>
    </div>
@endsection
