@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <label for="">Nama Hobi</label>
            <input type="text" required value="{{$hobi->hobi}}" name="hobi" id="" class="form-control" placeholder="Nama hobi" aria-describedby="helpId">
            <small id="helpId" class="text-muted">*Jangan yang aneh-aneh</small>
        </div>
        <a name="" id="" class="btn btn-outline-secondary" href="{{route('hobi.index')}}" role="button">Kembali</a>
    </div>
@endsection