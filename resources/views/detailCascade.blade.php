@extends('layouts.app')

@section('content')
<div class="container ">
    <h1>{{$infosCascade->nom}}</h1>
    <img src="https://www.calliaweb.co.uk/wp-content/uploads/2015/10/800x200.jpg" class="img-fluid" alt="Responsive image">
    <h2>Description</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Infos</th>
            </tr>
        </thead>
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
    <h2>Localisation</h2>
    Latitude : {{$infosCascade->lat}}
    Longitude : {{$infosCascade->lng}}
    <h2>Commentaires</h2>
    <!-- début exemples  -->
    <em>C'etait cool</em></br>
    <b>Toto</b> - 01/02/2017
    <hr>
    <em>Ouai bof</em></br>
    <b>Tata</b> - 18/01/2017
    <!-- fin exemples -->
</div>
@endsection
