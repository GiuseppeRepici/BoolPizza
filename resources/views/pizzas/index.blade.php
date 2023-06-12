@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <h1 class="text-center py-3">Lista delle Pizze</h1>

        <div class="container overflow-y">
            <a href="{{ route('home') }}" class="btn btn-warning"><i class="fa-solid fa-left-long"></i></a>
            <a href="{{ route('pizzas.create') }}" class="btn btn-success">Aggiungi una pizza</a>
            <div class="row d-flex">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Ingriedenti</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    @foreach ($Pizzas as $Pizza)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $Pizza->id }}</th>
                                <td>{{ $Pizza->name }}</td>
                                <td>{{ $Pizza->type }}</td>
                                <td>{{ $Pizza->ingredients }}</td>
                                <td>€ {{ $Pizza->price }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('pizzas.show', $Pizza->id) }}">Dettagli</a>
                                    <a class="btn btn-warning" href="{{ route('pizzas.edit', $Pizza->id) }}">Modifica</a>
                                    <form method="POST" action="{{ route('pizzas.destroy', $Pizza->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-3 elimina"
                                            titolo={{ $Pizza->name }}>Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
    @include('partials.modal_delete')
@endsection
