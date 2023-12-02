@extends('layouts.guest')

@section('content')

<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                        <img src="{{asset('images/app/arnoapp.png')}}" width="180" alt="">
                    </a>
                    <form>
                        @csrf

                        <div class="mb-3">
                        <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-15">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="mb-3">
                            <label for="email"
                                class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-15">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password"
                                class=" col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-15">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          
                                <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-15">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-9 offset-md-0">
                                <button type="submit" class="btn btn-primary" style="width: 600px; height:45px;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                            <a class="text-primary fw-bold ms-2" href="{{ route('login')}}">Login</a>
                          </div>
                    </form>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
