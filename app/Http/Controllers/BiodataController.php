<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Biodata::all();
        return view('dashboard.oprec.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Biodata::find($id);
        return view('dashboard.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, biodata $biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(biodata $biodata)
    {
        //
    }
}
