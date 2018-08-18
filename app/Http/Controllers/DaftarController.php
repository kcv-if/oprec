<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class DaftarController extends Controller
{
    public function daftar_create()
    {
        return view('daftar');
    }

    public function daftar_store(Request $request)
    {
//        dd($request);
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
        $data->path_foto = '/foto/'.$foto_name;
        $data->path_transkrip = '/transkrip/'.$transkrip_name;
        $data->mk1 = !is_null($request->mk1);
        $data->mk2 = !is_null($request->mk2);
        $data->mk3 = !is_null($request->mk3);
        $data->mk4 = !is_null($request->mk4);
        $data->mk5 = !is_null($request->mk5);
        $data->mk6 = !is_null($request->mk6);
        $data->mk7 = !is_null($request->mk7);
        $data->mk8 = !is_null($request->mk8);
        $data->mk9 = !is_null($request->mk9);
        $data->save();

        return redirect(route('home'));
    }
}
