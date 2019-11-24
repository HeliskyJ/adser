@extends('layouts.app')

@section('content')
<div class="container">
    <div class="hero is-fullheight has-background-grey">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h3 class="title has-text-black">{{ __('Reset Password') }}</h3>
                <hr class="login-hr">
                <div class="box">
                    <div class="columns">
                        <div class="column is-7">
                            <img src="{{ asset('images/people.png') }}" alt="">
                        </div>
                        <div class="column is-5 has-background-white-ter">
                            <br>
                            <figure class="avatar">
                                <img src="{{ asset('images/c.png') }}" alt="">
                                <hr>
                            </figure>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="field">
                                    <label class="label" for="email" class="label">{{ __('E-Mail Address') }}</label>
                                    <div class="control">
                                        <input id="email" type="email" class="input is-large @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="help" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="password" class="label">{{ __('Password') }}</label>
                                    <div class="control">
                                        <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="help" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
                                    <div class="field">
                                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="control">
                                        <button type="submit" class="button is-primary">
                                            {{ __('Reset Password') }}
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
