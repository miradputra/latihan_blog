@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('mahasiswa.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama mahasiswa</label>
                <input type="text" name="nama" id="" class="form-control" placeholder="Nama mahasiswa" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Nomor Induk Mahasiswa</label>
                <input type="text" name="nim" id="" class="form-control" placeholder="Nomor Induk Mahasiswa" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Nama dosen pembimbing</label>
              <select class="form-control" id="dosen_pembimbing" name="dosen">
                @foreach($dosen as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Hobi</label>
              <select class="form-control" id="multiple" name="hobi[]" multiple>
                @foreach($hobi as $data)
                    <option value="{{$data->id}}">{{$data->hobi}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('mahasiswa.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
