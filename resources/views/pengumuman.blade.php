

@extends('layouts.app')

@include('layouts.nav')
@section('content')
    <div class="containerwrap">
        <div class="container mycontainer">
        {{ Form::open(array('route' => 'pengumuman.show', 'method' => 'post')) }}
        <div class="labelnrp" style="display: none;">
        Masukkan NRP mu
        </div>
        <div id="formcontent">
            <input type="text" name="nrp" class="inputnrp" id="inputnrp1">
            <button type="reset" class="search" onclick="expand()"></button>
        </div>
        {{ Form::close() }}
        </div>
    </div>
@endsection