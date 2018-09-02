<?php /** @noinspection ALL */

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Biodata;
use Carbon\Carbon;

class DaftarController extends Controller
{
    public function daftar_create()
    {
        $time = Carbon::now();
        if((int)$time->format('d') >= 3)
        {
            return view('oprec-closed');
        }
        else
        {
            return view('daftar');
        }
    }

    public function daftar_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nrp' => 'required|unique:biodatas,nrp|regex:/0511174000[0-9]{4}/u',
            'nama' => 'required',
            'idline' => 'required',
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
            return redirect(route('daftar'))->withErrors($validator)->withInput();
        }
        //dd($validator);
        $foto_name = time().'.foto.'.$request->nrp.'.'.$request->foto->getClientOriginalExtension();
        $transkrip_name = time().'.transkrip.'.$request->nrp.'.'.$request->transkrip->getClientOriginalExtension();
        $request->foto->move(public_path('foto'), $foto_name);
        $request->transkrip->move(public_path('transkrip'), $transkrip_name);

        $data = new Biodata();
        $data->nrp = $request->nrp;
        $data->nama = $request->nama;
        $data->idline = $request->idline;
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
        $data->mk10 = !is_null($request->mk10);
        $data->mk11 = !is_null($request->mk11);
        $data->save();

        return redirect()->back()->with('message', 'Selamat kamu telah terdaftar menjadi calon admin!');
    }
}
