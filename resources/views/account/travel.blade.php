@extends('layouts.default')
@section('title') Mon trajet
@stop
@section('content')
    <div class="form-content">
        <div class="search-form">
            @if(isset($travel))
                <form method="POST" action="{{url('/travels/edit/'.$travel->id)}}" role="form" autocomplete="off">
                    @csrf
                    <input class="form-control" type="search" name="departure"  value="{{$travel->departure}}" placeholder="Départ">
                    <input class="form-control" type="search" name="destination" value="{{$travel->destination}}" placeholder="Destination">
                    <input class="form-control" type="datetime-local" name="dateOfDeparture" value="{{$travel->dateOfDeparture}}" placeholder="Date de départ">
                    <input class="form-control" type="number" min="1" max="8" value="1" name="numberOfPassengers" value="{{$travel->numberOfPassengers}}" placeholder="Nombre de passagers">
                    <input class="form-control" type="number" min="1" max="1000" name="price" value="{{$travel->price}}" placeholder="Prix">
                    <div class="search-button">
                        <input type="submit" value="Modifier">
                    </div>
                </form>
            @else
                <form method="POST" action="{{url('/travels')}}" role="form" autocomplete="off">
                    @csrf
                    <input class="form-control" type="search" name="departure"  placeholder="Départ">
                    <input class="form-control" type="search" name="destination" placeholder="Destination">
                    <input class="form-control" type="datetime-local" name="dateOfDeparture" placeholder="Date de départ">
                    <input class="form-control" type="number" min="1" max="8" value="1" name="numberOfPassengers" placeholder="Nombre de passagers">
                    <input class="form-control" type="number" min="1" max="1000" name="price" placeholder="Prix">
                    <div class="search-button">
                        <input type="submit" value="Enregistrer">
                    </div>
                </form>
            @endif

        </div>
    </div>
@stop
