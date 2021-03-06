@extends('main.master')


@section('content')
<div class="container">
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <p>Artikel dibuat oleh : </p>
          <small style="float:right">{{ $post->created_at->diffForHumans() }} </small>
         <h4 class="border-bottom border-gray pb-2 mb-0"><a href="{{ route('account', $post->user_id) }}">{{$post->getPostUsername()}}</a></h4>
          <br>
           <h2><center>{{ $post->title }}</center></h2>
           <h2><center><img src="{{asset ('/image/'.$post->image) }}" style="max-width: 100%"></center></h2>
            <div class="media text-muted pt-3">
               <br>
                <p style="word-break:break-all;">{{ $post->body }}</p>
      </div>
</div>

<div class="my-3 p-3 bg-white rounded shadow-sm">
        <h4 class="border-bottom border-gray pb-2 mb-0">Diskusi</h4>
                    @foreach($post->comments as $comment)
                        <div class="display-comment">
                            <strong><a href="{{ route('account', $comment->user_id) }}">{{ $comment->user->name }}</a></strong>
                            <p>{{ $comment->body }}</p>
                            <small style="float:right">{{ $comment->created_at->diffForHumans() }} </small>
                        </div>
                    @endforeach
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <textarea name="comment_body" rows="4" cols="10" class="form-control" style="resize:none" required></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Add Comment" />
                        </div>
                    </form>
    </div>
</div>
@endsection