<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/posts/create">Create post</a>
          </li>
      </ul>
  </div>
  <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="/dashboard">My Blogs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
          <span class="navbar-toggler-icon"></span>
      </button>
  </div>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            @if (Auth::guest())
              <a class="nav-link" a href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" a href="{{ route('register') }}">Register</a>
              @else
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

            @csrf

           </form> 

           <li class="nav-item">

            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

               {{ __('Logout') }}
               @endif
            </a>
          </li>
      </ul>
  </div>
</nav>