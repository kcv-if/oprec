<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="skrollr skrollr-desktop">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KCV</title>
    
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/logo.png') }}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js" integrity="sha256-H0TPKZAP4+uKmBpntUUMrKgH4VXBQNDZumun6fvan4w=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" integrity="sha256-v00gso3ox/d0KLJDJew6+zm29+J39rYWZvOgoXzDtCs=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js" integrity="sha256-rUSIjmg03RQ3LWNpEkVRPNoXytm7f1rJ3xAWO6gxCPc=" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">


</head>
<body data-0="background-position: 0px 0px, 0px 0px, 0px 0px;" data-100000="background-position:-10000px 20000px, -50000px 0px, 0px -20000px;">
    @yield('content')
    
    <script type="text/javascript">
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>

    <script type="text/javascript">
        var s = skrollr.init({
            forceHeight: false
        });
    </script>

    @if(Request::is('/'))
    @else
        <script type="text/javascript">
            $(document).ready(function() {
                $('.navheader').addClass('header-sticky');
            });
                    
        </script>
    @endif


</body>
</html>
