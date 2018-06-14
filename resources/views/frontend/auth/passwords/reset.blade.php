@extends('frontend.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <form  method="POST" action="{{ route('frontend.password.request) }}"> 
                    <div class="card-content">   
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <span class="card-title">{{ __('Reset Password') }}</span>
                        <hr>
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
                                <label for="password-confirm">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('Reset Password') }}
                        </button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection
