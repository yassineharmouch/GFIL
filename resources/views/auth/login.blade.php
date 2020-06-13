
@extends('layouts.about')

@section('content')
<div class="container">
  
        <form  class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-wrap">
              <p class="login-img"><i class="icon_lock_alt"></i></p>
              <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>

                    

                    
                        <input id="email" type="E-Mail Address" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div class="input-group">
                  <span class="input-group-addon"><i class="icon_key_alt"></i></span>
               
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  
                </div>

                <label class="checkbox">
                   
                       
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                       
                  
                </div>

                
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-info btn-lg btn-block" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                       
                        <button class="btn btn-info btn-lg btn-block" type="submit"> <a  href="{{ route('register') }}">{{ __('Register') }}</a></button>
                 
          
        </form>
                
            
        
    
</div>
@endsection
