@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <a href="{{ url('/facebook') }}" class="btn btn-facebook">
                                <svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; fill: currentcolor; margin-right: 5px;">
                                    <path d="m8 14.41v-4.17c0-.42.35-.81.77-.81h2.52v-2.08c0-4.84 2.48-7.31 7.42-7.35 1.65 0 3.22.21 4.69.64.46.14.63.42.6.88l-.56 4.06c-.04.18-.14.35-.32.53-.21.11-.42.18-.63.14-.88-.25-1.78-.35-2.8-.35-1.4 0-1.61.28-1.61 1.73v1.8h4.52c.42 0 .81.42.81.88l-.35 4.17c0 .42-.35.71-.77.71h-4.21v16c0 .42-.35.81-.77.81h-5.21c-.42 0-.8-.39-.8-.81v-16h-2.52a.78.78 0 0 1 -.78-.78" fill-rule="evenodd"></path>
                                </svg>
                                Connexion avec Facebook
                            </a>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <a href="{{ url('/google') }}" class="btn btn-google">
                            <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; margin-right: 5px;">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335"></path>
                                    <path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4"></path>
                                    <path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05"></path>
                                    <path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853"></path>
                                    <path d="M0 0h18v18H0V0z"></path>
                                </g>
                            </svg>
                                Connexion avec Google
                            </a>
                        </div>
                    </div>
                    
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div style="margin-top: 16px;margin-bottom: 16px;">
                            <div class="lineOverall">
                                <span class="line">
                                    <span class="textOu">
                                        <span>ou</span>
                                    </span>
                                </span>
                            </div>
                        </div>
                            <div class="col-md-4 col-md-offset-4">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-4 col-md-offset-4">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Connexion
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                Vous n'avez pas de compte? <a href="{{ route('register') }}">Inscription</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
