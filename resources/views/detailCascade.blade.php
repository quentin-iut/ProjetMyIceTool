@extends('layouts.app')

@section('content')
<div class="container ">
    <h1>{{$infosCascade->nom}}</h1>
    <div class="container-images-favoris">
        @foreach ($infosCascade->images as $img)
            <img src="{{$img->url}}" class="img-fluid " alt="{{$img->libelle}}">
        @endforeach
    </div>
    <div class="details-div">
        <h2>Description</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Nombre de voies</th>
                    <td> {{$infosCascade->nombre_voies}}</td>
                </tr>
                <tr>
                    <th scope="row">Altitude Minimum</th>
                    <td>{{$infosCascade->altitude_minimum}}m</td>
                </tr>
                <tr>
                    <th scope="row">Hauteur</th>
                    <td>{{$infosCascade->hauteur}}m</td>
                </tr>
                <tr>
                    <th scope="row">Niveau d'engagement</th>
                    <td>{{$infosCascade->niveau_engagement}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="details-div">
        <h2>Localisation</h2>
        <p>Latitude : {{$infosCascade->lat}}</p>
        <p>Longitude : {{$infosCascade->lng}}</p>
    </div>    
</div>
@endsection
