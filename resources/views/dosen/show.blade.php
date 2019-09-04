@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIPD</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                <tr>
                    <td scope="row">{{$no}}</td>
                    <td>{{$dosen->nama}}</td>
                    <td>{{$dosen->nipd}}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-outline-primary" href="{{ route('dosen.index') }}" role="button">Kembali</a>
    </div>
@endsection