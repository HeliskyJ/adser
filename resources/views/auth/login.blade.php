@extends('layouts.app')

@section('content')
<section class="hero  is-fullheight letter" style="background-color:#ead8cc;"> 
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="">
                <h3 class="title is-1 has-text-black letter"> Iniciar Sesión</h3>
                <hr class="login-hr">
                <div class="box">
                    <div class="columns">
                        <div class="column is-7 is-hidden-mobile">
                                <img src="{{ asset('images/people.png') }}" alt="">
                        </div>
                        <div class="column is-5 has-background-white-ter">
                            <br>
                    <figure class="avatar">
                        <img width="150" src="{{ asset('images/c.png') }}" alt="">
                        <hr>
                    </figure>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                            <div class="control">
                                <input id="email" type="email" class=" input is-large form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" required autofocus>
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
                                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Contraseña" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label for="remember" class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <button class="button is-block is-info is-large is-fullwidth">
                            {{ __('Login') }}
                                <i class=" 	fas fa-sign-in-alt" aria-hidden="true"></i>
                        </button>
                    </form>
                <p>
                    @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>  
                    @endif
                </p>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
