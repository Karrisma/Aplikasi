<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function index()
    {
        return  view("Halaman/index");
    } 
    function tentang()
    {
        return  view("Halaman/tentang");
    }
    function kontak()
    {
        $data =[
            'judul' => 'Halaman Kontak',
            'kontak'=>[
                'email' => 'karismafidya103@gmail.com',
                'instagram' => 'fidy25'
            ]
        ];
            
        
        return  view("Halaman/kontak")->with($data);
    }
}
