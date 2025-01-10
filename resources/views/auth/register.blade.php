@extends('layout.master')

@section('content')

<div class="container justify-content-center mt-5 col-5 border border-1 login-container">
    <div class="header-login justify-content-center">
        <p class="text-center fs-1 fw-bold">Link<span class="bg-primary px-3 rounded rounded-3 fw-bold" style="color: #fff;">in</span></p>
        <p class="text-center fw-bold fs-2 mt-5">{{ __('Register') }}</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="eg. Vinsensius Odilo">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">{{ __('Gender') }}</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" checked value="Male">
                <label class="form-check-label" for="gender">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                <label class="form-check-label" for="gender">
                    Female
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="eg. abc@gmail.com">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="li_username" class="form-label">{{ __('LinkedIn username') }}</label>

            <input id="li_username" type="text" class="form-control" required placeholder="eg. https://www.linkedin.com/in/<username>">
        </div>

        <div class="mb-3">
            <label for="job" class="form-label">{{ __('Job') }}</label>

            <input id="job" type="text" class="form-control" required placeholder="eg. Software Engineer">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">{{ __('Phone Number') }}</label>

            <input id="phone" type="text" class="form-control" required placeholder="eg. +62123321231">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Input password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
        </div>

        <div class="mb-5">
            <label for="pay" class="form-label">{{ __('Pay Here') }}</label>

            <input id="pay" type="number" class="form-control" name="pay" required placeholder="eg. 100000">
        </div>

        <div class="mb-2 d-grid">
            <button href="" type="submit" class="btn btn-primary fw-bold fs-5">
                {{ __('Register') }}
                <span> {Rp.100,000}</span>
            </button>
        </div>
    </form>
</div>
@endsection
