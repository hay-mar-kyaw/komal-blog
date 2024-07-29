<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Creative Coder</a>
      <div class="d-flex">
        <a href="/" class="nav-link">Home</a>
        <a href="/#blogs" class="nav-link">Blogs</a>
        <a href="#subscribe" class="nav-link">Subscribe</a>

        {{-- @if(!auth()->check()) --}}
        @guest
            <a href="/register" class="nav-link">Register</a>
            <a href="/login" class="nav-link">Login</a>
        @else
            <a href="" class="nav-link">Welcome {{auth()->user()->username}}</a>
            <form action="/logout" method="post">
                @csrf
                <button href="/logout" class="nav-link btn btn-link">Logout</button>
            </form>

        @endguest

      </div>
    </div>
  </nav>
