<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboardAdmin()
    {
        $bukus = DB::table('bukus') -> get();
        // mengirim data books ke view books
        return view('buku.index', ['bukus' => $bukus]);
    }
    
    public function registerAdmin()
    {
        return view('buku.registeradmin');
    }

    public function storeRegister(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        'password' => 'required',
        'role' => 'required',
    ]);
    // insert data ke table books
    DB::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'role' => $request->role,
    ]);
    // alihkan halaman tambah buku ke halaman books
    return redirect('/home')-> with('status', 'Data User Berhasil Ditambahkan');
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
       
    }

    public function dashboardUser()
    { 
        $bukus = DB::table('bukus') -> get();
        // mengirim data books ke view books
        return view('user.index', ['bukus' => $bukus]);
    }

    public function notFoundPage()
    {
        return view('notfound.index');
    }
}
