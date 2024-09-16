@extends('layout/Aplikasi')

@section('konten')

<h1>{{ $judul }} </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque dolorem quo labore magnam iure doloribus molestias? Qui, ex,
     earum dolores reiciendis sed pariatur architecto, praesentium obcaecati nihil aut dolorem quasi.</p>
<p> 
    <ul>
        <li>Email: {{ $kontak['email']}}</li>
        <li>Instagram: {{ $kontak['instagram']}}</li>
    </ul>
</p>
@endsection
    
   