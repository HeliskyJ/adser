@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="columns">
        <div class="column"></div>
        <div class="column is-5"><br><br>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                            {{ __('Confirm Password') }}
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                    {{ __('Please confirm your password before continuing.') }}
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="field">
                            <div class="column">
                                <label for="password" class="label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="help is-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <footer class="card-footer">
                            <button type="submit" class="card-footer-item">{{ __('Confirm Password') }}</button>
                            <a href="{{ route('service.index') }}" class="card-footer-item">Cancelar</a>
                        </footer>
                               <br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
        <div class="column"></div>
    </div>
    </div>
</div><br><br><br>
</div>
@endsection
