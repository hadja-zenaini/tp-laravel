@extends('layouts.default')
@section('title') Où et quand voulez-vous aller ?
@stop
@section('content')
    <div class="form-content">
        <div class="search-form">
            <form method="GET" action="{{url('/search')}}">
                @csrf
                <input class="form-control" type="search" name="departure" placeholder="Départ">
                <input class="form-control" type="search" name="destination" placeholder="Destination">
                <input class="form-control" type="datetime-local" name="dateOfDeparture" placeholder="Date de départ">
                <input class="form-control" type="number" min="1" max="8" value="1" name="numberOfPassengers" placeholder="Nombre de passagers">
                <div class="search-button">
                    <input type="submit" value="Rechercher">
                </div>
            </form>
        </div>
    </div>
@stop
