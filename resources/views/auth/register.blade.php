@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8 col-12">
                
                <div class="my-3 p-4 bg-white shadow rounded mt-5">
                    <h2 class="text-center mb-5"> I Blog </h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-floating mb-4">
                            
                            <label for="name" class="form-label" hidden>{{ __('Name') }}</label>
                            <input id="name" type="text" placeholder="name address" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
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
                            <input id="password" placeholder="" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-floating mb-4">
                            
                            <label for="password-confirmation" class="form-label" hidden>{{ __('Password') }}</label>
                            <input id="password-confirmation" placeholder="" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>

                                
                        </div>

                        
                        
                        <div class="d-flex align-items-center justify-content-between">

                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                            
                            <div>
                                you already have an account ?
                                <a href="{{ route('login') }}">
                                    login here
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
