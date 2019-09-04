@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" name="nama" id="" class="form-control" placeholder="Nama Lengkap" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Alamat</label>
              <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="">Tanggal lahir</label>
              <input type="date" name="tanggal_lahir" id="" class="form-control" placeholder="Tanggal Lahir" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control" placeholder="" aria-describedby="helpId">
              <br>
              <img src="" alt="" id="preview" style="width: 30%; height: 30%;">
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('biodata.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
