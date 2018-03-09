@extends('layouts.app')

@section('content')
<div class="container ">
    <h2>Favoris</h2>
    <table class="table table-hover col-md-10 bg-info text-white ">
        <thead>
            <tr>
                <th>Nom de la cascade</th>
                <th>nombre_voies</th>
                <th>altitude_minimum</th>
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
</div>
@endsection
