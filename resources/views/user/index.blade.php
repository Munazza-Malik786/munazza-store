@extends('layouts.links')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                <div class="card shadow border">
                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}
                    <div class="card-header p-0 m-0">
                        <div class="bg-info text-white">
                            <h3 class="fs-6 fw-bold text-center alert-link py-3">Registration Form</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{url('register')}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-12 col-form-label">{{ __('Name') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}"  autocomplete="name" autofocus
                                        placeholder="Type Your Name Here">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-12 col-form-label">{{ __('Email Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Type Your Email Addresss">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password"   placeholder="Type Your Password at least 8 chractor">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password-confirm"
                                        class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <div>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"   placeholder="Conform Your Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info text-light fw-bold">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="col-md-6 text-end">
                                    <span class="fs-6">Already have account</span> 
                                    <a href="{{url('login')}}" type="submit" class="btn btn-info text-light fw-bold">
                                      {{ __('Login Now') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection