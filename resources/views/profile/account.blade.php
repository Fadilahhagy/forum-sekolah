@extends('main.master')
            
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center ">
            <div class="panel panel-default">
              <div class="userprofile social ">
               <form action="" method="">
                <button type="submit" class="userpic"><img src="{{asset('/img/avatar.png')}}" alt="Artikel" class="userpicimg"></button>
                </form>
                <h3 class="username" style="position: relative; background-color: rgba(0,0,0,.8); display: inline-block;">{{ $users->name }}</h3>
                <p style="position: relative; background-color: rgba(0,0,0,.8);">{{ $users->email }}</p>
              </div>
              <p></p>
              <div class="clearfix"></div>
            </div>
          </div>
      <div class="my-3 p-3 rounded" style="max-width: 100%">
                <div class="col-md-10">
                @foreach($users->getPostUser() as $user)
            <div class="feed-container" style="max-width: 100%">
              <div class="feed-border clearfix">
                <div class="feed-options">
                    <div class="btn-group">
                     <!--  Dropdown Artikel -->
               @if(Auth::user()->id == $user->user_id)
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <a href="{{ route('edit', $user->id) }}" class="dropdown-item">Edit</a>
                            <form action="{{ route('destroy_posts', $user->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="dropdown-item" type="submit" style="cursor: pointer;">Delete</button>
                            </form>
                      </div>
                @endif
                    </div>
                </div>
                <div class="feed-body clearfix" style="max-width: 100%">
                  <div class="feed-avatar">
                      <div class="username">@<a href="{{ route('account', $user->user_id) }}">{{ $user->getPostUsername() }}</a></div>
                      <br />
                      <h5><a href="{{ route('post.show', $user->id) }}" style="color: #333;">{{ $user->title }}</a></h5>
                      <br />
                        <center><img src="{{asset ('/image/'.$user->image) }}" alt="Foto Artikel" style="max-width: 100%"></center>
                  </div>
                  <div class="feed-content">

                    <p>
                      {!!substr($user->body,0,150)!!}... <a href="{{ route('post.show', $user->id) }}">Show Post</a>
                    </p>
                  </div>
                </div>
                <div class="feed-footer clearfix">
                  <div class="footer-right">
                      <span class="footer-time"><a href="{{ route('post.show', $user->id) }}">{{ $user->created_at->diffForHumans() }}</a></span>
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