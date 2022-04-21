@extends('layouts.default')
@section('title') Mes trajets
<div class="add-travel">
    <a class="button" href="{{url('/travels/add')}}">Ajouter</a>
</div>
@stop
@section('content')
    <div class="travel-table">
        <table>
            <tr>
                <th>ID</th>
                <th>Départ</th>
                <th>Destination</th>
                <th>Date de départ</th>
                <th>Nombre de passagers</th>
                <th>Durée du voyage</th>
                <th>Prix du voyage</th>
                <th>Actions</th>
            </tr>
            @foreach($travels as $travel)
            <tr>
                <td>{{ $travel->id }}</td>
                <td>{{ $travel->departure }}</td>
                <td>{{$travel->destination}}</td>
                <td>{{$travel->dateOfDeparture}}</td>
                <td>2</td>
                <td>2 heures</td>
                <td>{{$travel->price}} €</td>
                <td>
                    <a class="button" href="{{url('/travels/edit/'. $travel->id)}}">Modifier</a>
                    <a class="button danger" href="{{url('/travels/delete-data/'. $travel->id)}}">Supprimer</a>
                    
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@stop

