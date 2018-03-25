@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-body" style="overflow: auto">
                <h2>Favoris</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nom de la cascade</th>
                            <th scope="col">nombre de voies</th>
                            <th scope="col">altitude minimum</th>
                            <th scope="col">hauteur</th>
                            <th scope="col">Plus de details</th>
                            <th scope="col">Retirer des favoris</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listeFavoris as $favoris)
                        <tr scope="row">
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
                <span><a href="{{route('home')}}"> ← Ajouter d'autres favoris ! (retour à la maps)</a></span>
            </div>
        </div>
    </div>
</div>
@endsection
