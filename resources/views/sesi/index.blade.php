@extends('layout/Aplikasi')

@section('konten')
    <div class="w-40 center border rounded px-5 py-5 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }} "name="email"class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"class="form-control">
            </div>

            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
@endsection