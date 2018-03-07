@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="padding-bottom: 5%;">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-8 col-md-offset-2">
                        <h3>Réinitialisation du mot de passe</h3>
                        <p>Entrez l'adresse email avec laquelle vous vous êtes inscrit. Nous allons vous envoyer un email avec votre nom et un lien pour réinitialiser votre mot de passe.</p>
                    </div> 

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-top: 2%;">
                            <div class="col-md-4 col-md-offset-2">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="fill: currentcolor; position: absolute; display: inline-block; width: 25px; height: 25px; left: 87%; top: 5px;">
                                    <path d="m22.5 4h-21c-.83 0-1.5.67-1.5 1.51v12.99c0 .83.67 1.5 1.5 1.5h20.99a1.5 1.5 0 0 0 1.51-1.51v-12.98c0-.84-.67-1.51-1.5-1.51zm.5 14.2-6.14-7.91 6.14-4.66v12.58zm-.83-13.2-9.69 7.36c-.26.2-.72.2-.98 0l-9.67-7.36h20.35zm-21.17.63 6.14 4.67-6.14 7.88zm.63 13.37 6.3-8.1 2.97 2.26c.62.47 1.57.47 2.19 0l2.97-2.26 6.29 8.1z" fill-rule="evenodd"></path>
                                </svg>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" style="width:200px;color: #fff;background-color: #7adaf0;border-color: #7adaf0;">
                                    Envoyer
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
