<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;


class GuruController extends Controller
{
    //
    function index()
    {
        // $data = guru::all();
        $data = guru::orderBy('nomor_induk' , 'asc')->paginate(1);
        return view('guru/index')->with('data', $data);

        return '<h1> Saya GURU dari Controller</h1>';
    }
    function detail($id)
    {
        // return "<h1>Saya GURU dari Controller dengan Id $id</h1>";
        $data = guru::where('nomor_induk',$id)->first();
        return view('guru/show')->with('data', $data);
    } 
    function create(){
        
    }
} 
