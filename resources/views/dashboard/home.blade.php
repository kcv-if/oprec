@extends('layouts.app')

@include('layouts.nav')
@section('content')
    <div class="skrollr-body">
        <div class="home-container">
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-md-4">NRP</div>
                    <div class="col col-md-6">Nama</div>
                    <div class="col col-md-2">Action</div>
                </li>

                @foreach($data as $d)
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">{{$d->nrp}}</div>
                    <div class="col col-md-6" data-label="name">{{$d->nama}}</div>
                    <button class="col col-md-2 btnaction" data-label="detail" onclick="window.location='{{ route('dashboard.detail', ['id' => $d->id]) }}'">Detail</button>
                </li>
                @endforeach
        </div>
    </div>
@endsection
