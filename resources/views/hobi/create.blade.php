@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('hobi.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Nama Hobi</label>
              <input type="text" name="hobi" id="" class="form-control" placeholder="Nama hobi" aria-describedby="helpId">
                <small id="helpId" class="text-muted">*Jangan yang aneh-aneh</small>
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('hobi.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection