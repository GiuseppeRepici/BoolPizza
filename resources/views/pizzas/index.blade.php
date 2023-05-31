@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <h1 class="text-center py-3">Lista delle Pizze</h1>

        <div class="container">
            <a href="{{ route('pizzas.create') }}">Aggiungi una pizza</a>
            <div class="row d-flex">
                @foreach ($Pizzas as $Pizza)
                    <div class="col-3">
                        <div class="card m-3">
                            <div class="card-body">
                                <h5 class="card-title">Pizza: {{ $Pizza->name }}</h5>
                                <p class="card-text">Tipologia: {{ $Pizza->type }}</p>
                                <p class="card-text">Ingredienti: {{ $Pizza->ingredients }}</p>
                                <p class="card-text">Prezzo: {{ $Pizza->price }} €</p>
                                <a href="{{ route('pizzas.show', $Pizza->id) }}">vedi dettagli</a>

                                <form action="{{ route('pizzas.destroy', $Pizza->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete()"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            return confirm('Sei sicuro di voler eliminare questo elemento?');
        }
    </script>
@endsection
