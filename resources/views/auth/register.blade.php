@extends('layouts.app')
@section('title', 'Signup')
@section('content')
<div class="container">
        <h1>{{ __('Register') }}</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row  mx-auto col-md-6">
                <label for="firstname">{{ __('Firstname') }}:</label>
                    <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group row mx-auto col-md-6">
                <label for="surname">{{ __('Surname') }}:</label>
                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                    @if ($errors->has('surname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('surname') }}</strong>
                        </span>
                    @endif
            </div>                       

            <div class="form-group row mx-auto col-md-6">
                <label for="email">{{ __('E-Mail Address') }}:</label>


                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

            </div>

            <div class="form-group row mx-auto col-md-6">
                <label for="password">{{ __('Password') }}:</label>


                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

            </div>

            <div class="form-group row mx-auto col-md-6">
                <label for="password-confirm">{{ __('Confirm Password') }}:</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

            </div>

            <div class="form-group mx-auto col-md-6">
                <div>
                    <button type="submit" class="btn btn-outline-dark btn-lg btn-block">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>


</div>
@endsection
