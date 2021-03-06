@extends('main.master')

@section('content')
      <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="{{asset('/img/LABRPL-LINED.jpg')}}" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
               <center>
                <br>
                <br>
                <h1 class="animated fadeInLeft">Selamat Datang di Forum RPL SMK BPI Bandung!</h1>
                <p class="animated fadeInRight">Disini anda bisa membuat,dan berdiskusi tentang artikel-artikel yang ada.</p>
                <br>
                <br>
                <p><a class="btn btn-outline-light animated fadeIn" href="{{ route('signup')}}">Daftar Sekarang!</a></p>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="container">
  			<h1 class="col-5"><img src="{{asset('/img/flame2.png')}}" style="width: 9%; height: auto;"> New Article</h1>
  			<br>
@foreach($posts->slice(0, 3) as $post)
      <div class="row mb-2">
        <div class="col-md-12 animated fadeIn">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><a href="{{ route('signup') }}">{{$post->getPostUsername()}}</a></strong>
              <h3 class="mb-0">
                <a class="text-dark" href="{{ route('signup') }}">{{ $post->title }}</a>
              </h3>
              <div class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</div>
              <p class="card-text mb-auto">{!!substr($post->body,0,500)!!}... 
              <a href="{{ route('signup') }}">Show Post</a></p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="{{asset ('/image/'.$post->image) }}" alt="Foto Artikel">
          </div>
        </div>
      </div>
@endforeach

</div>

@endsection