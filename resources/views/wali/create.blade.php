@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('wali.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" id="" class="form-control" placeholder="Nama mahasiswa" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Nama mahasiswa</label>
              <select class="form-control" name="mhs">
                @foreach($mhs as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('wali.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection