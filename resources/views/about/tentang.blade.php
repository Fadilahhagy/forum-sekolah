@extends('main.master')
   
@section('content')
  <body>
<div class="container">
   <div class="row">
   <div class="col-sm-6">
   <h1 style="padding-top:50px; text-align:left;">Selamat Datang di Forum SMK BPI RPL!</h1>
   <p>Forum SMK BPI RPL adalah sarana untuk siswa-siswi SMK BPI jurusan RPL untuk membuat,berdiskus tentang artikel seputar RPL!</p>
   <ul>
   </ul>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7199770239413!2d107.61681261436748!3d-6.924038969695159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e62b0db77deb%3A0xbd5c7fa67e97fb7b!2sSMK+Badan+Perguruan+Indonesia!5e0!3m2!1sid!2sid!4v1548251101995" width="600" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
   <div class="col-md-6">
      <img src="{{asset('/img/books.png')}}" width="600">
   </div>
      </div>
</div>
  </body>
  @endsection