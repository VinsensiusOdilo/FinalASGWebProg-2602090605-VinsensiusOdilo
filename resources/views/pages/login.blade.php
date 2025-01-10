@extends("layout.master")

@section("content")

<div class="container justify-content-center mt-5 col-5 border border-1 login-container">

    <div class="header-login justify-content-center">
        <p class="text-center fs-1 fw-bold">Link<span class="bg-primary px-3 rounded rounded-3 fw-bold" style="color: #fff;">in</span></p>
        <p class="text-center fw-bold fs-2 mt-5">Login</p>
    </div>

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-5">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 d-grid">
            <a type="submit" class="btn btn-primary fw-bold fs-5">Login</a>
        </div>
        <div class="mb-3 text-center">
            <a type="submit" class="fw-bold">Don't have an account yet ?</a>
        </div>

    </form>
</div>

@endsection