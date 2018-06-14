@extends('renter.layout.app')

@section('content')
    <div class="row">
        <div class="col l6">
            <div class="card">
                <form  method="POST" action="{{ route('renter.login.post') }}"> 
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
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            {{ __('Login') }}
                        </button>
                        <a class="waves-effect waves-light btn" href="{{ route('renter.password.reset') }}">
                            {{ __('Forgot Your Password') }}
                        </a>
                    </div>
                </form>    
            </div>
        </div>
        <div class="col l6">
            <div class="card">
                <form  method="POST" action="{{ route('renter.register.post') }}"> 
                    <div class="card-content">   
                        {{ csrf_field() }}
                        <span class="card-title">{{ __('Register') }}</span>
                        <hr>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">person</i>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" class="{{ $errors->has('name') ? 'invalid' : '' }}" required autofocus>
                                <label for="name" data-error="{{ $errors->has('name') ? $errors->first('name'): '' }}">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'invalid' : '' }}" required autofocus>
                                <label for="email" data-error="{{ $errors->has('email') ? $errors->first('email'): '' }}">E-Mail Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" name="password" class="{{ $errors->has('password') ? 'invalid' : '' }}" required>
                                <label for="password" data-error="{{ $errors->has('password') ? $errors->first('password'): '' }}">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password-confirm" type="password" name="password_confirmation" required>
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection