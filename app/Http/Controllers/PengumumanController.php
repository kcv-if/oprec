<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $nrp = $request->nrp;
        $pengumumans = Pengumuman::where('nrp', $nrp)->get();
        if(count($pengumumans) == 0) {
            $lolos = 2;
        }
        else {
            $lolos = $pengumumans[0]['lolos'];
        }
        return view('pengumuman', compact('lolos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        //
    }
}
