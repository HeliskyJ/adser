@extends('layouts.app')

@section('content')
<div class="container">
        <section class="hero  is-fullheight  has-background-grey"> 
            <div class="columns">
                <div class="column"></div>
            <div class="column is-5"><br><br><br><br>
                <div class="hero-body">
    <div class="row justify-content-center">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        {{ __('Reset Password') }}
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <figure class="avatar">
                            <img src="{{ asset('images/c.png') }}" width="60" alt="">
                            <hr>
                        </figure>
                        @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="field">
                                    <div class="column">
                                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                    <div class="control">
                                        <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="help is-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                </div>
                                <footer class="card-footer">
                                    <button class="button is-primary card-footer-item">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </footer>
                            </form>
                        </div>
                    </div>
            </div>
                    </div>
                </div>
            </div>
            <div class="column"></div>
            </div>
        </section>
        </div>
    </div>
@endsection
