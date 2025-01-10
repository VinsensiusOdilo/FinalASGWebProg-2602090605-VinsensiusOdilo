@extends('layout.master')

@section('content')
<div class="container justify-content-center mt-5 col-5 border border-1 login-container">
    <div class="header-login justify-content-center">
        <p class="text-center fs-1 fw-bold">Link<span class="bg-primary px-3 rounded rounded-3 fw-bold" style="color: #fff;">in</span></p>
        <p class="text-center fw-bold fs-2 mt-5">{{ __('Login') }}</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="my-3 d-grid">
            <button type="submit" class="btn btn-primary fw-bold fs-5">
                {{ __('Login') }}
            </button>
        </div>

        <div class="mb-3 d-grid">
            @if (Route::has('password.request'))
                <button class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </button>
            @endif
        </div>
    </form>
</div>
@endsection
