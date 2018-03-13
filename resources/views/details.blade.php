@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier mon profil</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('enreModif') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nom :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nom" placeholder="Enter nom" name="nom" value="{{$currentUser -> nom}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Prenom :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="prenom" placeholder="Enter prenom" name="prenom" value="{{$currentUser -> prenom}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Email :</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$currentUser -> email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Telephone :</label>
                            <div class="col-sm-4">
                                <input type="tel" class="form-control" id="tel" placeholder="Enter tel" name="tel" value="{{$currentUser -> telephone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Pays :</label>
                            <div class="col-sm-4">
                                <select name="pays" class="form-control" value="{{$currentUser -> langue_id}}">
                                    @foreach ($listePays as $pays)
                                    @if ($currentUser -> langue_id == $pays->id )
                                    <option value="{{$pays->id}}" selected>{{$pays->code}}</option>
                                    @else
                                    <option value="{{$pays->id}}">{{$pays->code}}</option>
                                    @endif

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Niveau :</label>
                            <div class="col-sm-4">
                                <select name="niveau" class="form-control" value="{{$currentUser -> niveau_id}}">
                                    @foreach ($listeniveaux as $niveaux)
                                    @if ($currentUser -> niveau_id == $niveaux->id )
                                    <option value="{{$niveaux->id}}" selected>{{$niveaux->libelle}}</option>
                                    @else
                                    <option value="{{$niveaux->id}}">{{$niveaux->libelle}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                                <div class="checkbox">
                                    @if ($currentUser->alert)
                                    <label><input type="checkbox" name="newsletters"  checked> Recevoir des newsletters</label>
                                    @else
                                    <label><input type="checkbox" name="newsletters" > Recevoir des newsletters</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-2">
                                <button type="submit" class="btn btn-primary connexion">
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
