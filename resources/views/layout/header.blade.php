<nav class="navbar navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand bg-primary fw-bold fs-2 px-3 rounded rounded-3 mx-5 my-2" style="color: #fff;">In</a>
    
    <form class="d-flex col-5">
      <input class="form-control mx-5" type="search" placeholder="Search" aria-label="Search">
    </form>

    <form class="d-flex">
      <a href="{{ route("register") }}" class="btn btn-primary ms-5 me-3" type="submit">Register</a>
      <a href="{{ route("login") }}" class="btn btn-outline-primary me-5" type="submit">Login</a>
    </form>
  </div>
</nav>