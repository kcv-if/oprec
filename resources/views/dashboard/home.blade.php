@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                            {{--<td> </td>--}}
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
    </div>
</div>
@endsection
