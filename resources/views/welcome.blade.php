@extends('layouts.app')
@section('content')
    <h1 class="text-center">Lista delle Pizze</h1>
    <div class="container">
        <div class="row d-flex">
            @foreach ($Pizzas as $Pizza)
                <div class="col-3">
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title">Pizza: {{ $Pizza->name }}</h5>
                            <p class="card-text">Tipologia: {{ $Pizza->type }}</p>
                            <p class="card-text">Ingredienti: {{ $Pizza->ingredients }}</p>
                            <p class="card-text">Prezzo: {{ $Pizza->price }} €</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
