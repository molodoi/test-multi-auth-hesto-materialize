@extends('frontend.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <form  method="POST" action="{{ route('frontend.login.post') }}"> 
                    <div class="card-content">   
                        {{ csrf_field() }}
                        <span class="card-title">{{ __('Login') }}</span>
                        <hr>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'invalid' : '' }}" required autofocus>
                                <label for="email" data-error="{{ $errors->has('email') ? $errors->first('email'): '' }}">{{ __('E-Mail Address') }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" name="password" class="{{ $errors->has('password') ? 'invalid' : '' }}" required>
                                <label for="password" data-error="{{ $errors->has('password') ? $errors->first('password'): '' }}">{{ __('Password') }}</label>
                            </div>
                        </div>
                        <p>
                            <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">{{ __('Remember Me') }}</label>
                        </p>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('Login') }}
                            <i class="material-icons right">lock_open</i>
                        </button>
                        <a class="waves-effect waves-light btn" href="{{ route('frontend.password.request') }}">
                            {{ __('app.forgotYourPassword') }}
                        </a>
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection
