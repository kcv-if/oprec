@extends('layouts.app')
@section('content')
    <div class="skrollr-body">
        <div class="mycontainer vertical-center">
            <div class="container">
                <div class="row">
                    {{ Form::open(array('route' => 'daftar.store', 'files' => true)) }}
                    <div class="col-lg-8 col-sm-7 formleft">
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                            <span class="form-control-wrap">
                                <input type="text" name="nrp" id="c-nrp" class="form-control" aria-required="true" aria-invalid="false" placeholder="NRP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NRP'">
                            </span>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                            <span class="form-control-wrap">
                                <input type="text" name="nama" id="c-nama" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'">
                            </span>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                            <span class="form-control-wrap">
                                <input type="text" name="hobi" id="c-hobi" class="form-control" aria-required="true" aria-invalid="false" placeholder="Hobi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Hobi'">
                            </span>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-xs-6">
                            <span class="form-control-wrap">
                                <input type="text" name="kesibukan" id="c-kesibukan" class="form-control" aria-required="true" aria-invalid="false" placeholder="Kesibukan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kesibukan'">
                            </span>
                        </div>
                        <div class="form-group col-md-12">
                            <span class="form-control-wrap">
                                <input type="text" name="alasan" id="c-alasan" class="form-control" aria-required="true" aria-invalid="false" placeholder="Alasan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alasan'">
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            <p>Transkrip</p>
                            <input type="file" name="transkrip">
                        </div>
                        <div class="form-group col-md-6">
                            <p>Foto</p>
                            <input type="file" name="foto">
                        </div>

                        <div class="form-group col-md-12 btn">
                            <button class="btnsubmit">Submit</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-5 formright">
                        <h2>Mata Kuliah RMK KCV yang diminati</h2>
                        <p>Bisa memilih lebih dari satu</p>

                        <div class="inputgroup">
                            <input id="mk1" name="mk1" type="checkbox">
                            <label for="mk1">Kecerdasan Buatan</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk2" name="mk2" type="checkbox">
                            <label for="mk2">Kecerdasan Komputasional</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk3" name="mk3" type="checkbox">
                            <label for="mk3">Data Mining</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk4" name="mk4" type="checkbox">
                            <label for="mk4">Pemrograman Citra Digital</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk5" name="mk5" type="checkbox">
                            <label for="mk5">Visi Komputer</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk6" name="mk6" type="checkbox">
                            <label for="mk6">Sistem Temu Kembali Informasi</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk7" name="mk7" type="checkbox">
                            <label for="mk7">Robotik</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk8" name="mk8" type="checkbox">
                            <label for="mk8">Analisis Data Multivariat</label>
                        </div>
                        <div class="inputgroup">
                            <input id="mk9" name="mk9" type="checkbox">
                            <label for="mk9">Analisis Media Sosial</label>
                        </div>

                    </div>
                    
                    
                    
                    {{ Form::close() }}
                </div> 
            </div>
        </div>
    </div>
@endsection





