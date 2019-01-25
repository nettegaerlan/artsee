@extends('layouts.template')

@section("title", "Register")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row mb-0">
                            <div class="has-float-label col-12 col-md-5 offset-0 offset-md-1">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} mb-3" name="firstname" value="{{ old('firstname') }}" placeholder=" " required autofocus>

                                <label for="firstname">{{ __('First Name') }}</label>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif       
                            </div>


                            <div class="has-float-label col-12 col-md-5">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }} mb-3" name="lastname" value="{{ old('lastname') }}" placeholder=" " required autofocus>

                                <label for="lastname">{{ __('Last Name') }}</label>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif       
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="has-float-label col-12 col-md-5 offset-0 offset-md-1">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} mb-3" name="username" value="{{ old('username') }}" placeholder=" " required autofocus>

                                <label for=username">{{ __('Username') }}</label>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif       
                            </div>

                            <div class="has-float-label col-12 col-md-5">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mb-3" name="email" value="{{ old('email') }}" placeholder=" " required autofocus>

                                <label for="email">{{ __('E-mail') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif       
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthMonth" class="col-md-2 offset-md-2 col-form-label text-md-right">{{ __('Birthday') }}</label>

                            <div class="col-4 col-md-2">
                                <select id="birthMonth" name="birthMonth" class="form-control{{ $errors->has('birthMonth') ? ' is-invalid' : '' }}" required autofocus>
                                    <option value="" disabled selected> Month </option>
                                    @for($birthMonth=1 ; $birthMonth<=12 ; $birthMonth++)
                                        <option value="{{ $birthMonth }}">
                                            {{ date('F', mktime(0, 0, 0, $birthMonth, 1)) }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-4 col-md-2">
                                <select id="birthDate" name="birthDate" class="form-control{{ $errors->has('birthDate') ? ' is-invalid' : '' }}" required autofocus>
                                    <option value="" disabled selected> Date </option>
                                    @for($birthDate=1 ; $birthDate<=31 ; $birthDate++)
                                        <option value="{{ $birthDate }}">
                                            {{ $birthDate }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-4 col-md-2">
                                <select id="birthYear" name="birthYear" class="form-control{{ $errors->has('birthYear') ? ' is-invalid' : '' }}" required autofocus>
                                    <option value="" disabled selected> Year </option>
                                    @for($birthYear=1970 ; $birthYear<=2019 ; $birthYear++)
                                        <option value="{{ $birthYear }}">
                                            {{ $birthYear }}
                                        </option>
                                    @endfor
                                </select>
                            </div>


                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
