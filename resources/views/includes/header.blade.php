<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('app.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>&nbsp;Management
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @if (Auth::check())
                  @if (Auth::user()->hasRole('user'))
                      <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
                  @else
                      <a class="dropdown-item" href="{{ route('admin.profile') }}">Admin Profile</a>
                  @endif
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('app.logout') }}">Logout</a>            
              @else
                  <a class="dropdown-item" href="{{ route('app.signup') }}">Signup</a>
                  <a class="dropdown-item" href="{{ route('app.signin') }}">Signin</a>
              @endif
          </div>
      </li>
    </ul>
  </div>
</nav>