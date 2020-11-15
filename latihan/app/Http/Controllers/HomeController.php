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
