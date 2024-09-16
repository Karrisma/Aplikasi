@extends('layout/Aplikasi')

@section('konten')
   
   <div>
        <a href='/guru' class="btn btn-secondary"><< Back</a>
        <h1>{{ $data->nama }}</h1>
        <p>
            <b>Nomor Induk</b> {{ $data->nomor_induk }}
        </p>
        <p>
            <b>Alamat</b> {{ $data->alamat }}
        </p>
   </div>
@endsection