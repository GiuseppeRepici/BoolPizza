@extends ('layouts.app')
@section('content')
    <div class="container">
        <div class="card m-3">
            <div class="card-body">
                <h5 class="card-title">Pizza: {{ $Pizza->name }}</h5>
                <p class="card-text">Tipologia: {{ $Pizza->type }}</p>
                <p class="card-text">Ingredienti: {{ $Pizza->ingredients }}</p>
                <p class="card-text">Prezzo: {{ $Pizza->price }} €</p>
                <a href="{{route('pizzas.show',$Pizza->id)}}">vedi dettagli</a>
            </div>
        </div>
    </div>
@endsection