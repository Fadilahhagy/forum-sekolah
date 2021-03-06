@extends('main.master')
            
@section('content')
<br>
@if(isset($details))
    <h4 style="margin-left: 80px;">Hasil dari penelusuran <b> {{$query}} </b> </h4>
    <br/>
    <div class="container">
        <div class="row mb-2">
    @foreach($details as $post)
            <div class="col-sm-12">
              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><a href="{{route('account', $post->user_id) }}">{{$post->getPostUsername()}}</a></strong>
                  <h3 class="mb-0">
                    <a class="text-dark" href="{{ route('post.show', $post->id) }}">{{$post->title}}</a>
                  </h3>
                  <div class="mb-1 text-muted">{{$post->created_at->diffForHumans()}}</div>
              <p class="card-text mb-auto">{!!substr($post->body,0,500)!!}... 
              <a href="{{ route('post.show', $post->id) }}">Show Post</a></p>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block headline" src="{{asset ('/image/'.$post->image)}}" alt="Foto Artikel">
              </div>
            </div>
    @endforeach
        </div>
    </div>
@endif
@endsection