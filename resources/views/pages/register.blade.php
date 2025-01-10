@extends("layout.master")

@section("content")

<div class="container justify-content-center mt-5 col-5 border border-1 login-container">

    <div class="header-login justify-content-center">
        <p class="text-center fs-1 fw-bold">Link<span class="bg-primary px-3 rounded rounded-3 fw-bold" style="color: #fff;">in</span></p>
        <p class="text-center fw-bold fs-2 mt-5">Register</p>
    </div>

    <form>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Input your name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Input your email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputLinkedin" class="form-label">LinkedIn Username</label>
            <input type="text" class="form-control" id="exampleInputLinkedin" placeholder="https://www.linkedin.com/in/<username>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPhone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputPhone" placeholder="+62 123-321-231">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Input password">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm your password">
        </div>

        <div class="mb-5">
            <label for="exampleInputMoney" class="form-label">Pay Here</label>
            <input type="number" class="form-control" id="exampleInputMoney" placeholder="Input the amount of money here">
        </div>

        <div class="mb-3 d-grid">
            <a type="submit" class="btn btn-primary fw-bold fs-5">Register <span>{Rp.100,000}</span></a>
        </div>
        <div class="mb-3 text-center">
            <a type="submit" class="fw-bold">Login here</a>
        </div>

    </form>
</div>

@endsection