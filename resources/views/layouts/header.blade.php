<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="/">Restaurant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact us</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        @if (Auth::check())
          @if (Auth::user()->email == 'admin@admin.com')
            <li class="nav-item">
              <a class="nav-link" href="/admin">Dashboard</a>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signup">Sign Up</a>
          </li>
        @endif
      </ul>
    </div>
  </nav>