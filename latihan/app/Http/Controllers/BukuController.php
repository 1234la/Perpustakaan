<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = Buku::all();
        // return view('buku.index', compact('datas'));
        
        $bukus = DB::table('bukus') -> get();
        // mengirim data books ke view books
        return view('buku.index', ['bukus' => $bukus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($_POST);
        $book = new Buku();
        $book->create($request->all());
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

    public function edit($id) {
    // mengambil data books berdasarkan id yang dipilih
    $bukus = DB::table('bukus')->where('id',$id)->first();
    // passing data books yang didapat ke view edit.blade.php
    return view('buku.edit', compact('bukus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request) 
    {
    // untuk validasi form
    $this-> validate($request, [
        'judul' => 'required',
        'pengarang' => 'required',
        'penerbit' => 'required',
        'tahun' => 'required',
        'isbn' => 'required',
        'letak' => 'required',
        'jumlah' => 'required'
    ]);
    // update data books
    DB::table('bukus')->where('id', $request->id)->update([
        'judul' => $request->judul,
        'pengarang' => $request->pengarang,
        'penerbit' => $request->penerbit,
        'tahun' => $request->tahun,
        'isbn' => $request->isbn,
        'letak' => $request->letak,
        'jumlah' => $request->jumlah
    ]);
    // alihkan halaman edit ke halaman books
    return redirect('/admin/index')->with('status', 'Data Buku Berhasil DiUbah');
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