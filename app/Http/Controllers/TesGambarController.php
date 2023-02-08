<?php

namespace App\Http\Controllers;
use App\Models\TesGambar;

use Illuminate\Http\Request;

class TesGambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page/admin/tes-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048000',
            'judul' => 'required',
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('gambar');
 
        $nama_file = time()."_"."$request->nama"."_".$file->getClientOriginalName();
 
                  // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'gambar/tes';
        $file->move($tujuan_upload,$nama_file);
        // if(empty($request->link_video)){
        //     $link_video="1";
        // }
        // else{
        //     $link_video=$request->link_video;
        // }
        // $nama=User::where('id', FacadesAuth::user()->id)->first();
        // $name=$nama->name;
        TesGambar::create([
            'gambar' => $nama_file,
            'judul' => $request->judul,
            // 'deskripsi' => $request->deskripsi,
            // 'link_video'=>$link_video,
            // 'createby'=>$name,
        ]);
 
        // alert('Data Berhasil di Tambah');
        return redirect('/tes-admin')->with('data berhasil ditambah');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
