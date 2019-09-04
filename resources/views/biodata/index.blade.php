@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Biodata</h2>
        <a href="{{route('biodata.create')}}" class="btn btn-outline-primary">Tambah Data</a>
    <p></p>
    <ul class="list-unstyled">
        @foreach($bio as $data)
        <li class="media">
            <img src="{{ asset('assets/img/biodata/'.$data->foto) }}" class="mr-3" alt="{{ $data->foto }}" style="width: 60px; height: 60px;">
            <div class="media-body">
                <h5 class="mt-0 mb-1">{{ $data->nama }}<small> | {{ $data->tanggal_lahir }}</small></h5>
                {{ $data->alamat }}
            </div>
            <div class="text-right">
                <form action="{{route('biodata.destroy', ['id' => $data->id])}}" method="post">
                    @csrf
                    @method('delete')

                    <a href="{{route('biodata.edit', ['id' => $data->id])}}" >Edit Data</a> []
                    <a href="{{route('biodata.show', ['id' => $data->id])}}" >Detail Data</a>[]
                    <button type="submit" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="stretched-link text-danger" style="border-color: transparent; color: transparent;">Delete Data</button>
                </form>
            </div>
        </li>

        <hr>
        @endforeach
    </ul>
</div>
@endsection
