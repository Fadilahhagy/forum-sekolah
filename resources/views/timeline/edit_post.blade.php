@extends('main.master')


@section('content')
@if(Auth::user()->id == $posts->user_id)
<div class="container">
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h4 class="border-bottom border-gray pb-2 mb-0">Edit Artikel</h4>
            <div class="media text-muted pt-3">
            <form role="form" action="{{ url('/account/' . $posts->id) }}" method="POST" enctype="multipart/form-data">
                          @method('PUT')
                          @csrf
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <input type="text" class="form-control" placeholder="Judul Artikel" style="margin-bottom: 10px;" name="title" 
                value="{{ $posts->title }}">
                <input type="file" name="file" style="margin-bottom: 10px;" value="{{asset ('/image/'.$posts->image) }}">
                <textarea style="resize: none;" placeholder="Isi Artikel" cols="500" rows="15" class="form-control" name="body">{{ $posts->body }}</textarea>
                <input type="hidden" name="user_id" value="{{ $posts->user_id }}">

            <div class="row">
                <button type="submit" class="btn btn-outline-primary col-md-2 ml-md-auto" style="margin-right:10px; margin-top: 10px;">Submit</button>
            </div>
            </form>
      </div>
</div>
@else
<br/>
<br/>
<h1>404 | Not Found</h1>
@endif
@endsection