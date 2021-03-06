@extends('main.master')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buat Artikel</div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                             {!! csrf_field() !!}
		{{ method_field('POST') }}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                            <label class="label">Judul Artikel : </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Foto Artikel : </label>
                            <input type="file" name="image" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Isi Artikel : </label>
                            <textarea name="body" rows="10" cols="30" class="form-control" style="resize:none" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="user_id">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection