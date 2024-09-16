@extends('layout/Aplikasi')

@section('konten')
        <a href="/guru/create" class="btn btn-primary">+Tambah Data Guru</a>
   <table class="table">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nomer Induk</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>   
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>
                    @if ($item->foto)
                    <img style="max-width:70px;max-height:70px" src="{{ url('foto').'/'.$item->foto }}"/>
                        
                    @endif
                </td>
                <td>{{ $item->nomor_induk }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a class='btn btn-secondary btn-sm' href='{{ url('/guru/' .$item->nomor_induk) }}'>Detail</a>
                    <a class='btn btn-warning btn-sm' href='{{ url('/guru/' .$item->nomor_induk. '/edit') }}'>Edit</a>
                    <form onsubmit="return confirm('Anda Yakin Hapus data?')" class='d-inline' action="{{ '/guru/'.$item->nomor_induk }}" method='post'>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
        @endforeach
    </tbody>
    </table>
    {{ $data->links() }}
@endsection