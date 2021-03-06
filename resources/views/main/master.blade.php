<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="817419308529-77ptannp5dga8ba180s0nmaeko32mk9e.apps.googleusercontent.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Custom CSS -->   
    <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/main/index.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main/login.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main/account.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main/feed.css') }}" rel="stylesheet" type="text/css">
    <!-- Animate CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
<!-- Compiled and minified JavaScript -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo-forum1.png') }}">
    <title>Forum RPL SMK BPI</title>
  </head>
  <body>

    <div id="app">
        @include('main.header')
           
            @yield('content')
            
        @include('main.footer')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
     <script src="https://apis.google.com/js/api:client.js"></script>
     <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
     <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/google.js') }}"></script>
     <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
     <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>