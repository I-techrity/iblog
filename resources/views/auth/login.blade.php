@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-12">
                
                <div class="my-3 p-4 bg-white shadow rounded mt-5">
                    <h2 class="text-center mb-5"> Login to Iblog </h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-4">
                            
                            <label for="email" class="form-label" hidden>{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" placeholder="email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-floating mb-4">
                            
                            <label for="password" class="form-label" hidden>{{ __('Password') }}</label>
                            <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                              <!-- Checkbox -->
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  name="remember"
                                  id="remember"
                                  checked
                                />
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                              </div>
                            </div>
                        
                            <div class="col">
                              <!-- Simple link -->
                              @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                
                            </div>
                          </div>
                        <div class="d-flex align-items-center justify-content-between">

                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            
                            <div>
                            you dont have an account ?
                            <a href="{{ route('register') }}">
                                register here
                            </a>
                        </div>
                    </div>
                    </form>

                    <div class="row mt-3">

                        <a href="{{ route('auth.facebook.redirect') }}" class="btn  my-1 mx-auto text-center btn-social btn-facebook">
                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
