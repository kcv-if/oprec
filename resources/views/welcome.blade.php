@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="o-barba js-barba" id="js-barba-wrapper" aria-live="polite">
        <div class="links">
           <a href="{{route('daftar')}}">DAFTAR</a>
        </div>
    </div>
@endsection