@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-body">
                <h2>Favoris</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nom de la cascade</th>
                            <th>nombre de voies</th>
                            <th>altitude minimum</th>
                            <th>hauteur</th>
                            <th>Plus de details</th>
                            <th>Retirer des favoris</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listeFavoris as $favoris)
                        <tr>
                            <td>{{$favoris->nom}}</td>
                            <td>{{$favoris->nombre_voies}}</td>
                            <td>{{$favoris->altitude_minimum}}</td>
                            <td>{{$favoris->hauteur}}</td>
                            <td><a href="{{route('detailsCascade',[$favoris->id])}}" class="btn btn-link">+ de details</a></td>
                            <td><a href="{{route('retirerFavoris',[$favoris->id])}}" class="btn btn-link">Retirer des favoris</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br><br>
                <span><a href="{{route('home')}}"> ← Ajouter d'autres favoris ! (retour à la maps)</a></span>
            </div>
        </div>
    </div>
</div>
@endsection
