{{ Form::open(array('route' => 'daftar.store', 'files' => true)) }}
<div class="row">
    <div class="form-group row">
        NRP:
        <input type="text" name="nrp">
    </div>
    <div class="form-group row">
        Nama:
        <input type="text" name="nama">
    </div>
    <div class="form-group row">
        Alasan:
        <input type="text" name="alasan">
    </div>
    <div class="form-group row">
        Hobi:
        <input type="text" name="hobi">
    </div>
    <div class="form-group row">
        Kesibukan:
        <input type="text" name="kesibukan">
    </div>
    <div class="form-group row">
        Foto:
        <input type="file" name="foto">
    </div>
    <div class="form-group row">
        Transkrip:
        <input type="file" name="transkrip">
    </div>
    <div class="form-group row">
        <button>Submit</button>
    </div>
</div>
{{ Form::close() }}
