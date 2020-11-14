<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buku;
use Validator;
use Alert;

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
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'isbn' => 'required',
            'letak' => 'required',
            'jumlah' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $book = new Buku();
        $cek = $book->create($request->all());
        if($cek){
            Alert::success(' Berhasil !', ' Data Berhasil Ditambahkan');
            return redirect()->route('buku.index');
        }
        else{
            Alert::error(' Gagal !', ' Data Gagal Ditambahkan');
            return redirect()->route('buku.index');
        }
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
        // $book = Buku::fingOrfail($id);
        // return view('buku.edit',['bukus' => $book]);
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
        // $book = Buku::findOrfail($id);
        // $book->create($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Buku::findOrfail($id);
        $cek = $book->delete();
        if($cek){
            Alert::success(' Berhasil !', ' Data Berhasil Dihapus');
            return redirect()->route('buku.index');
        }
        else{
            Alert::error(' Gagal !', ' Data Gagal Dihapus');
            return redirect()->route('buku.index');
        }
    }
}
