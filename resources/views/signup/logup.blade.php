@extends('main.master')
   
@section('content')
<div class="container">
   <div class="row">
   <div class="col-sm-6">
   <h1 style="padding-top:50px; text-align:left;">Selamat Datang di Forum SMK BPI RPL!</h1>
   <p>Forum SMK BPI RPL adalah sarana untuk siswa-siswi SMK BPI jurusan RPL untuk membuat,berdiskus tentang artikel seputar RPL!</p>
   </div>
   <div class="col-md-6">
    <form class="form-signin" method="POST" action="{{ route ('register') }}">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Daftar</h1>
      </div>
<a href="{{ url('auth/google') }}">
<div class="google-btn">
  <div class="google-icon-wrapper">
    <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"   />
  </div>
  <a class="btn-text" href="{{ url('auth/google') }}" style="font-family:raleway; font-weight: 500; color:#fff; text-decoration: none;"> Register with Google</a>
</div>
</a>
   <br>
    {{ csrf_field() }}
      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
                      <div class="invalid-feedback">
                            Alamat E-mail sudah digunakan
                      </div>
        @endif
        <label for="inputEmail">Alamat Email</label>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputName" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" required>
        @if ($errors->has('name'))
                      <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                      </div>
        @endif
        <label for="inputName">Nama Lengkap</label>
      </div>
      
       <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" name="password" required>
        @if ($errors->has('password'))
                      <div class="invalid-feedback">
                            Kata sandi minimal harus 6 karakter
                      </div>
        @endif
        <label for="inputPassword">Kata Sandi</label>
        </div>
        
       <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" name="password_confirmation" required>
        <label for="inputPassword">Konfirmasi Kata Sandi</label>
        @if ($errors->has('password_confirmation'))
                      <div class="invalid-feedback">
                            Kata sandi konfirmasi harus cocok
                      </div>
        @endif
      </div>
      <div class="checkbox mb-3">
        <label>
            <p>Dengan daftar,Anda setuju dengan <a href="{{ route('rule') }}">Syarat & Ketentuan</a> serta <a href="{{ route('rule') }}">kebijakan Privasi</a></p>
        </label>
      </div>
      <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Simpan</button>
      <br>
    </form>
</div>
  @endsection