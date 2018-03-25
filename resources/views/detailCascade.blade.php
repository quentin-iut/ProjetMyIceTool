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
    @if(isset($chartjs))
        <div class="details-div">
            <h2>Temperatures</h2>
            <canvas id="lineChartTest" width="200" height="100"></canvas>
            {!!$chartjs->render()!!}
        </div>
    @endif
    <div class="details-div">
        <h2>Commentaire(s)</h2>
        @foreach ($infosCascade->commentaires as $commentaire)
        <div id="commentaire{{$commentaire->id}}">
            <p><em>{{$commentaire->libelle}}</em></p>
            <p><b>{{$commentaire->user->prenom}}</b> - {{$commentaire->date}}</p>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection
