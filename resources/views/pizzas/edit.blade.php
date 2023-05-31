@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('pizzas.update', $Pizza->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nome Pizza</label>
                <input type="text" name="name" value="{{ $Pizza->name }}" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="type">Tipo Pizza</label>
                <input type="text" name="type" value="{{ $Pizza->type }}" class="form-control" id="type">
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredienti</label>
                <input type="text" name="ingredients" value="{{ $Pizza->ingredients }}" class="form-control"
                    id="ingredients">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" min="0.00" max="99.99" step="0.01" name="price"
                    value="{{ $Pizza->price }}" class="form-control" id="price">
            </div>
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
@endsection
