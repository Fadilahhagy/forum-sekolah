@extends('main.master')

@section('content')
  <body>
<div class="background">
    <form class="form-signin" method="POST" action="{{ route ('login') }}">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      </div>
    {{ csrf_field() }}
      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
                      <div class="invalid-feedback">
                            Alamat E-mail salah
                      </div>
        @endif
        <label for="inputEmail">Alamat Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
                      <div class="invalid-feedback">
                            Kata sandi salah
                      </div>
        @endif
        <label for="inputPassword">Kata Sandi</label>
      </div>
      <button class="btn btn-lg btn-outline-primary btn-block" type="submit" style="margin-bottom:10px;">Masuk</button>
        <a href="{{ url('auth/google') }}">
        <div class="google-btn">
          <div class="google-icon-wrapper">
            <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
          </div>
          <a class="btn-text" href="{{ url('auth/google') }}" style="font-family:raleway; font-weight: 500; color:#fff; text-decoration: none;">
          Sign in with Google</a>
        </div>
        </a>
        <hr class="style-eight">
        <br>
      <a class="btn btn-lg btn-outline-info btn-block" href="{{ route('signup') }}">Daftar</a>
      <br>
    </form>
</div>
  </body>
@endsection