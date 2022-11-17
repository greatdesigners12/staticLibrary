<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= Route::currentRouteName() == "home" ? "active" : "" ?>" aria-current="page" href="{{route("home")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= Route::currentRouteName() == "about" ? "active" : "" ?>" aria-current="page" href="{{route("about")}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= Route::currentRouteName() == "contact" ? "active" : "" ?>" aria-current="page" href="{{route("contact")}}">Contact</a>
          </li>
          @auth
          <li class="nav-item">

            <form action="/logout" method="POST">
              @csrf
                <button class="btn btn-primary-outline">Logout</button>
            </form>
            

          </li>
          @endauth
          @guest
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/login">Login</a>

          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </nav>