@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nama mahasiswa</label>
                <input type="text" name="nama" value="{{$mhs->nama}}" class="form-control" placeholder="Nama mahasiswa" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Nomor Induk Mahasiswa</label>
                <input type="text" name="nim" value="{{$mhs->nim}}" class="form-control" placeholder="Nomor Induk Mahasiswa" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Nama dosen pembimbing</label>
              <select class="form-control" name="dosen">
                @foreach($dosen as $data)
                    <option value="{{$data->id}}" {{$mhs->dosen->id == $data->id ? "selected" :"" }}>{{$data->nama}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Hobi</label>
              <select class="form-control" id="multiple" name="hobi[]" multiple>
                @foreach($hobi as $data)
                    <option value="{{$data->id}}" {{ (in_array($data->id, $selected)) ? 'selected' : '' }}>{{$data->hobi}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('mahasiswa.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
