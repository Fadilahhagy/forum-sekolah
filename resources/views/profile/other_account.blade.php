@extends('main.master')
            
@section('content')
<br>
<div class="container">
   <div class="row">
    <div class="col-md-12 text-center ">
        <div class="panel panel-default">
          <div class="userprofile social ">
           <form action="" method="">
            <button type="submit" class="userpic"><img src="" alt="" class="userpicimg"></button>
            </form>
            <h3 class="username" style="position: relative; background-color: rgba(0,0,0,.8); display: inline-block;">{{ Auth::user()->name }}</h3>
            <p style="position: relative; background-color: rgba(0,0,0,.8);">{{ Auth::user()->email }}</p>
          </div>
          <div class="clearfix" style="margin-bottom: 20px;"></div>
        </div>
      </div>
    @foreach($articles as $key => $article)
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250" style=" height: 200px; font-size:13px;">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-info">{{ $article->getPostUsername() }}</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="{{ url('/article/' . $article->id . '/article') }}">{!!substr($article->judul_content,0,20)!!}</a>
              </h3>
              <div class="mb-1 text-muted">{{ $article->created_at }}</div>
              <p class="card-text mb-auto">{!!substr($article->content,0,200)!!}. . . 
              <br>
              <a href="{{ url('/article/' . $article->id . '/article') }}">Continue reading</a>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="{{ storage_path().'/images/'.$article->image }}" alt="Foto Artikel" width="250">
            <!-- Dropdowns   -->
<div class="btn-group dropleft">
  <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-pen"></i></button>
  <div class="dropdown-menu">
						<form action="{{ url('/account/' . $article->id) }}" method="POST">
							@csrf
							{{ method_field('DELETE') }}
							<button type="submit" class="dropdown-item" style="cursor:pointer">Delete</button>
						</form>
    <a class="dropdown-item" href="{{ url('/account/' . $article->id . '/edit_article') }}">Edit</a>
  </div>
</div>
          </div>
        </div>
@endforeach
    </div>
</div>
@endsection