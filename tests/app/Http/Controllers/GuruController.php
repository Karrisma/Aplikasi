<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = guru::orderBy('nomor_induk' , 'asc')->paginate(10);
        return view('guru/index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guru/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nomor_induk', $request->nomor_induk);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);
        
        $request->validate([
            'nomor_induk' => 'required|numeric',
            'nama'=> 'required',
            'alamat' => 'required',
            'foto'=> 'required|mimes:jpeg,jpg,png,gif'
        ], [ 
            'nomor_induk.required'=>'Nomor Induk Wajib Di Isi',
            'nomor_induk.numeric'=>'Nomor Induk Wajib Di Isi dengan Angka',
            'nama.required'=>'Nama Wajib Di Isi',
            'alamat.required'=>'Alamat Wajib Di Isi',
            'foto.required' => ' Masukkan Foto Anda',
            'foto.mimes'=> 'Foto hanya di perbolehkan berekstensi JPEG, JPG, PNG, GIF'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data =[
            'nomor_induk' => $request->input('nomor_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),  
            'foto' => $foto_nama
        ];
        guru::create($data);
        return redirect('guru')->with('success','Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = guru::where('nomor_induk',$id)->first();
        return view('guru/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = guru::where('nomor_induk', $id) ->first(); 
       return view('guru/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=> 'required',
            'alamat' => 'required'
        ], [ 
            'nomor_induk.numeric'=>'Nomor Induk Wajib Di Isi dengan Angka',
            'nama.required'=>'Nama Wajib Di Isi',
            'alamat.required'=>'Alamat Wajib Di Isi',
        ]);
       
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];

        if ($request->hasFile('foto')){
            $request->validate([ 
                'foto' => 'mimes:jpeg,jpg,png,gif'
            ],[
                'foto.mimes'=> 'Foto hanya di perbolehkan berekstensi JPEG, JPG, PNG, GIF'
            
            ]);
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').".".$foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);//sudah ter upload ke direktori

            $data_foto = guru::where('nomor_induk',$id)->first();
            File::delete(public_path('foto'). '/'.$data_foto->foto);

            // $data= [
            //     'foto'=>$foto_nama
            // ];
            $data['foto'] = $foto_nama;
        }

       
        guru::where('nomor_induk',$id)->update($data);
        return redirect('/guru')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = guru::where('nomor_induk',$id)->first();
        File::delete(public_path('foto').'/'. $data->foto);
        guru::where('nomor_induk',$id)->delete();
        return redirect('/guru')->with('success', 'Data Berhasil di Hapus');
    }
}
