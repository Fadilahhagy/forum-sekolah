@extends('main.master')

@section('content')
<div class="container">
      <div class="my-3 p-3 rounded">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>Artikel Terbaru</h2>
                    <hr/>
                   <a href="{{ route('post.create') }}" class="btn btn-primary btn-block">Buat Article</a>
                    @foreach($posts as $post)
                    <div class="feed-container">
                      <div class="feed-border clearfix">
                        <div class="feed-body clearfix">
                              <div class="feed-avatar">
                                    <div class="username">@<a href="{{ route('account', $post->user_id) }}">{{ $post->getPostUsername() }}</a></div>
                                    <br />
                                    <h5><a href="{{ route('post.show', $post->id) }}" style="color: #333;">{{ $post->title }}</a></h5>
                                    <br />
                                    <center><img src="{{asset ('/image/'.$post->image) }}" alt="Foto Artikel" style="float: left"></center>
                              </div>
                              <div class="feed-content">
                                <p>
                                  {!!substr($post->body,0,300)!!}... <a href="{{ route('post.show', $post->id) }}">Show Post</a>
                                </p>
                              </div>
                            </div>
                            <div class="feed-footer clearfix">
                                  <div class="footer-right">
                                      <span class="footer-time"><a href="{{ route('post.show', $post->id) }}">{{ $post->created_at->diffForHumans() }}</a></span>
                                  </div>
                              </div>
                      </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection