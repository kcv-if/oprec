@extends('layouts.app')

@include('layouts.nav')
@section('content')

<div class="mycontainer vertical-center detailcontainer">
	<div class="container">
		<div class="card">
			<div class="card-header text-center">
				<h4>{{$data->nama}} ({{$data->nrp}})</h4>
			</div>
			<div class="card-body">
				<div class="col-lg-4">
					<img alt="User Pic" src="{{url($data->path_foto)}}" class="img-circle img-responsive img-profile">
				</div>
				<div class="col-lg-8 text-center">
					<ul class="list-group list-group-flush">
					    <li class="list-group-item">
					    	<h5>Hobi</h5>
					    	{{$data->hobi}}
						</li>
					    <li class="list-group-item">
						    <h5>Kesibukan</h5>
						   	{{$data->kesibukan}}
						</li>
					    <li class="list-group-item">
					    	<h5>Alasan</h5>
					    	{{$data->alasan}}
					    </li>
					</ul>

					<div class="space-between">
						<button class="col-lg-4 btnaction" onclick="window.open('{{url($data->path_transkrip)}}', '_blank')">Transkrip IP</button>
						<div class="col-lg-4">
							<i class="fab fa-line fa-lg"></i>
							{{$data->idline}} 
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

{{-- NRP = {{$data->nrp}}<br>
Nama = {{$data->nama}}<br>
Id line = {{$data->idline}}<br>
Alasan = {{$data->alasan}}<br>
Hobi = {{$data->hobi}}<br>
Kesibukan = {{$data->kesibukan}}<br>
Foto = <img src="{{url($data->path_foto)}}"><br>
Transkrip = <img src="{{url($data->path_transkrip)}}"> --}}

@endsection