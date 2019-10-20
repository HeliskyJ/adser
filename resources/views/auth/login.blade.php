@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="columns">
        <div class="column is-3"></div>
    <div class="column is-half">
            <div class="box">
                <div class="title is-2">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                            <div class="control">
                                <input id="email" type="email" class=" input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">{{ __('Password') }}</label>
                            <div class="control">
                                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field is-grouped is-grouped-centered">
                                    <button class="button is-link is-fullwidth">
                                        {{ __('Login') }}
                                    </button>
                            </div><br>
                        <div class="field is-grouped">
                            <div class="control">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}   
                                </label>
                            </div>
                            <div class="control is-grouped-right">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
</div>
@endsection
