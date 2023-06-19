@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container">
            <form action="{{ route('pizzas.store') }}" method="POST">

                @csrf
                <div class="form-group">
                    <label for="name" style="color: white;">Nome Pizza</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="type" style="color: white;">Tipo Pizza</label>
                    <input type="text" name="type" class="form-control" id="type">
                </div>
                <div class="form-group">
                    <label for="ingredients" style="color: white;">Ingredienti</label>
                    <input type="text" name="ingredients" class="form-control" id="ingredients">
                </div>
                <div class="form-group">
                    <label for="price" style="color: white;">Prezzo</label>
                    <input type="number" min="0.00" max="99.99" step="0.01" name="price" class="form-control"
                        id="price">
                </div>
                <button class="btn btn-primary" type="submit">Invia</button>
            </form>
        </div>
    </div>
@endsection
