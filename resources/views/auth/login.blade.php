@extends('layouts.links')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5 border shadow">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                    <div class="card-header p-0 m-0">
                        <div class="bg-info text-white">
                            <h3 class="fs-6 fw-bold text-center alert-link py-3">Login Form</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('login')}}">
                            @csrf
                            <div class="row mb-3">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
                                <label for="email" class="col-md-12 col-form-label">Email</label>

                                <div class="col-md-12">
                                    {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                                    <input id="email" type="email"
                                        class="form-control  @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Type Your Email Addresss">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Type Your Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input p-2" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0 ">
                                <div class="col-md-12 d-flex justify-content-between">
                                    <div>
                                        <button type="submit" class="btn btn-info text-light px-3 fw-bold">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link text-end" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
