<?php

namespace App\Http\Controllers;
use Validator;
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
        $validator = Validator::make($request->all(), [
            'nrp' => 'required|regex:/0511174000[0-9]{4}/u',
            'nama' => 'required',
            'alasan' => 'required',
            'hobi' => 'required',
            'kesibukan' => 'required',
            'foto' => 'required|image|max:2048',
            'transkrip' => 'required|max:2048',
            'mk1' => 'nullable',
            'mk2' => 'nullable',
            'mk3' => 'nullable',
            'mk4' => 'nullable',
            'mk5' => 'nullable',
            'mk6' => 'nullable',
            'mk7' => 'nullable',
            'mk8' => 'nullable',
            'mk9' => 'nullable',
            'mk10' => 'nullable',
            'mk11' => 'nullable',
        ]);
        if ($validator->fails()) {
            // dd($validator);
            // dd($request);
            return redirect(route('daftar'))
                        ->withErrors($validator)
                        ->withInput();
        }
        // dd($validator);
        $foto_name = time().'.foto.'.$validator->nrp.'.'.$validator->foto->getClientOriginalExtension();
        $transkrip_name = time().'.transkrip.'.$validator->nrp.'.'.$validator->transkrip->getClientOriginalExtension();
        $validator->foto->move(public_path('foto'), $foto_name);
        $validator->transkrip->move(public_path('transkrip'), $transkrip_name);

        $data = new Biodata();
        $data->nrp = $validator->nrp;
        $data->nama = $validator->nama;
        $data->alasan = $validator->alasan;
        $data->hobi = $validator->hobi;
        $data->kesibukan = $validator->kesibukan;
        $data->path_foto = '/foto/'.$foto_name;
        $data->path_transkrip = '/transkrip/'.$transkrip_name;
        $data->mk1 = !is_null($validator->mk1);
        $data->mk2 = !is_null($validator->mk2);
        $data->mk3 = !is_null($validator->mk3);
        $data->mk4 = !is_null($validator->mk4);
        $data->mk5 = !is_null($validator->mk5);
        $data->mk6 = !is_null($validator->mk6);
        $data->mk7 = !is_null($validator->mk7);
        $data->mk8 = !is_null($validator->mk8);
        $data->mk9 = !is_null($validator->mk9);
        $data->mk10 = !is_null($validator->mk9);
        $data->mk11 = !is_null($validator->mk9);
        $data->save();

        return redirect(route('home'));
    }
}
