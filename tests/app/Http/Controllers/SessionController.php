<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib di Isi',
            'password.required'=>'Password wajib di Isi',
        ]);

        $infologin = [
            'email' =>$request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            //jika otentikasi sukses
            return redirect('guru')->with('success','Login Berhasil');

        }else{
            return redirect('sesi')->withErrors('Username & password Tidak Valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success','Anda Berhasil Logout');
    }

    function register(){
        return view('sesi/register');
    }

    function create(Request $request){

        Session::flash('name',$request->name);
        Session::flash('email',$request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ],[
            'name.required'=>'Nama wajib di Isi',
            'email.required'=>'Email wajib di Isi',
            'email.email' => 'Harap Memasukkan Email yang Valid',
            'email.unique' => 'Email Sudah Pernah di Gunakan, Masukkan Email Lain',
            'password.required'=>'Password wajib di Isi',
            'password.min'=> 'Minimun Password 6 karakter'
        ]);

        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' =>$request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            //jika otentikasi sukses
            return redirect('guru')->with('success', Auth::user()->name .'Login Berhasil');

        }else{
            return redirect('sesi')->withErrors('Username & password Tidak Valid');
        }
    }
}
