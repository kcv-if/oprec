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
                
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
                <li class="table-row">
                    <div class="col col-md-4" data-label="nrp">05111640000052</div>
                    <div class="col col-md-6" data-label="name">John Doe</div>
                    <button class="col col-md-2 btnaction" data-label="detail">Detail</button>
                </li>
            </ul>
            
       
           {{--  <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            <table border="1">
                                <thead>
                                <tr>
                                    <th>NRP</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>NRP</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if($data['jumlah'] == 0)
                                    <td>  </td>
                                @else
                                    @foreach($data['calon'] as $datas)
                                        <tr>
                                            <td>{{ $datas->nrp }}</td>
                                            <td>{{ $datas->nama }}</td>
                                            <td>
                                                <a href="{{route('dashboard.detail',$datas->id)}}">
                                                    <button>detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
