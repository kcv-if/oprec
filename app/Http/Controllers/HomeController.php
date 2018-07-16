<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

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
        return view('dashboard.home');
    }

    public function daftar_create()
    {
        return view('daftar');
    }

    public function daftar_store(Request $request)
    {
        $foto_name = time().'.foto.'.$request->nrp.'.'.$request->foto->getClientOriginalExtension();
        $transkrip_name = time().'.transkrip.'.$request->nrp.'.'.$request->transkrip->getClientOriginalExtension();
        $request->foto->move(public_path('foto'), $foto_name);
        $request->transkrip->move(public_path('transkrip'), $transkrip_name);

        $data = new Biodata();
        $data->nrp = $request->nrp;
        $data->nama = $request->nama;
        $data->alasan = $request->alasan;
        $data->hobi = $request->hobi;
        $data->kesibukan = $request->kesibukan;
        $data->path_foto = '/foto'.$foto_name;
        $data->path_transkrip = '/transkrip'.$transkrip_name;
        $data->save();

        return redirect(route('daftar'));
    }
}
