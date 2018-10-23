

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

    @if($lolos == "-1")
    @elseif($lolos == "0")
        <div class="modal fade" id="modalpengumuman" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>NRP Siapa Tuh</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">$("#modalpengumuman").modal()</script>
    @else
        <div class="modal fade" id="modalpengumuman" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Lolos ga yaaaa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">$("#modalpengumuman").modal()</script>
    @endif
@endsection

