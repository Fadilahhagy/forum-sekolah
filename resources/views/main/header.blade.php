    <nav class="navbar navbar-expand-sm navbar-light fixed-top animated fadeInDown" id="mainNav">
      <div class="container">
@if(Auth::guest())
        <a class="navbar-brand js-scroll-trigger" href="{{ route ('home') }}">
            <img src="{{asset('/img/logo-forum3.png')}}" alt="Foto Artikel" width="50%">
        </a>
@else
        <a class="navbar-brand js-scroll-trigger" href="{{ route ('timeline') }}">
            <img src="{{asset('/img/logo-forum3.png')}}" alt="Foto Artikel" width="50%">
        </a>
@endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
@if(Auth::guest())
           
            <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" > <i class="fa fa-search"></i> Search
                <div class="dropdown-menu">
                  <form class="px-4 py-3" action="/search" method="post">
                   {{ csrf_field() }}
                    <div class="form-group">
                      <input typ="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Search..." name="qword">
                    </div>
                  </form>
                    <a class="dropdown-item" href="{{ route('signup')}}">Baru masuk Forum? Daftar Sekarang!</a>
                </div>
                </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route ('home') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route ('about') }}">About</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-outline-info" href="{{ route ('signin') }}">Login</a>
            </li>
@else
            <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-search"></i> Search</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <form class="px-4 py-3" action="/searching" method="post">
                   {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" class="form-control d-block" placeholder="Search..." name="q">
                    </div>
                  </form>
                    <a class="dropdown-item" href="#">Cari apapun di website ini</a>
                </div>
            </li>
    <notification v-bind:notifications="notifications"></notification>      
          <li class="nav-item dropdown" style="margin-right:20px;">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
            <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            </div>
          </li>
@endif
<!-- Search Form -->
<div id="search"> 
	<span class="close">X</span>
	<form role="search" id="searchform" action="{{ url('/search') }}" method="POST">
	    {{ csrf_field() }}
		<input name="qword" type="search" placeholder="type to search"/>
	</form>
</div>
          </ul>
        </div>
      </div>
    </nav>