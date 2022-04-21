@extends('layouts.default')
@section('title') Résultats de la recherche
@stop
@section('content')
    @foreach($travels as $travel)
        <div class="travels">
            <h3>Jeu. 24 févr.</h3>
            <div class="travel-card">
                <div class="travel-card-body">
                    <div class="travel-card-main">
                        <div class="travel-card-cities">
                            {{$travel->departure}} → {{$travel->destination}}
                        </div>
                        <div class="travel-card-hours">
                            04:50 → 07:15
                        </div>
                        <div class="travel-card-info">
                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="kirk-icon sc-ksdxgE ehSFsc" width="20px" height="20px" aria-hidden="false"><title>Très proche de l'adresse indiquée</title><path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path></svg>
                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="kirk-icon sc-ksdxgE hcEKjk" width="20px" height="20px" aria-hidden="true"><path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path></svg>
                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="kirk-icon sc-ksdxgE hcEKjk" width="20px" height="20px" aria-hidden="true"><path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path></svg>
                        </div>
                    </div>
                    <div class="travel-price">
                        {{$travel->price}} €
                    </div>
                </div>
                <div class="travel-card-footer">
                <span class="travel-type">
                    <img width="50px" src="https://blablacar.imgix.net/https%3A%2F%2Fstorage.googleapis.com%2Fbbc-cdn-software-integration%2Fbbc-bus-icon.png?fit=fill&amp;fill=solid&amp;w=144&amp;h=144&amp;s=f2e44040f20967d37d29fb28df329115" alt="BlaBlaCar Bus">
                    <span>BlaBlaCar Bus</span>
                </span>
                    <span class="travel-bonus">
                    <img src="https://cdn.blablacar.com/search/images/spa/filters/power_socket.svg" alt="" width="24">
                    <img src="https://cdn.blablacar.com/search/images/spa/filters/toilet.svg" alt="" width="24">
                </span>
                </div>
            </div>
        </div>
    @endforeach
@stop
