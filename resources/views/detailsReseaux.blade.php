@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Page perso</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        <div class="alert alert-warning">
                            <strong>Attention!</strong> Certaines données des comptes "reseaux sociaux" ne sont pas modifiables.
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nom:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nom" placeholder="Enter nom" name="nom" value="{{$currentUser -> nom}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Prenom:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="prenom" placeholder="Enter prenom" name="prenom" value="{{$currentUser -> prenom}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$currentUser -> email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Numéro de telephone:</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" id="tel" placeholder="Enter tel" name="tel" value="{{$currentUser -> telephone}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Pays :</label>
                            <div class="col-sm-10">
                                <select name="pays" value="{{$currentUser -> langue_id}}">
                                    <option value="0">Entrez un pays</option>
                                    @foreach ($listePays as $pays)
                                    <option value="{{$pays->id}}">{{$pays->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Niveau :</label>
                            <div class="col-sm-10">
                                <select name="niveau" value="{{$currentUser -> niveau_id}}">
                                    <option value="0">Entrez un Niveau</option>
                                    @foreach ($listeniveaux as $niveaux)
                                    <option value="{{$niveaux->id}}">{{$niveaux->libelle}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    @if ($currentUser->alert && $currentUser->alert != 0):
                                    <label><input type="checkbox" name="remember" checked> S'abonner aux newsletters</label>
                                    @else:
                                    <label><input type="checkbox" name="remember"> S'abonner aux newsletters</label>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer les modifications
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
