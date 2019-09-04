@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('wali.update', $wali->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" value="{{$wali->nama}}" class="form-control" placeholder="Nama mahasiswa" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Nama mahasiswa</label>
              <select class="form-control" name="mhs">
                @foreach($mhs as $data)
                    <option value="{{$data->id}}" {{$wali->mahasiswa->id == $data->id ? "selected" :"" }}>{{$data->nama}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('wali.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection