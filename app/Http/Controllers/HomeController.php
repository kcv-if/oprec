<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use Response;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Biodata::all();
        return view('dashboard.home', compact('data'));
    }

    public function detail_pendaftar($id)
    {
        $data = Biodata::find($id);
        return view('dashboard.detail', compact('data'));
    }

    public function show_transkrip($public_path)
    {
        $path = storage_path('/transkrip/'.$public_path);
        return response()->file($path);
    }
}
