@extends('frontend.layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <form  method="POST" action="{{ route('frontend.password.email') }}"> 
                <div class="card-content">
                    {{ csrf_field() }}
                    @if (session('status'))
                        <div class="card green darken-1">
                            <div class="card-content white-text">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                    <span class="card-title">{{ __('Reset Password') }}</span>
                    <hr>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail</i>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'invalid' : '' }}" required autofocus>
                            <label for="email" data-error="{{ $errors->has('email') ? $errors->first('email'): '' }}">{{ __('E-Mail Address') }}</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection
