
@extends('layouts.app')

@section('content')

    <h1>Nueva Categoría</h1><br><br>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <br>
        <input type="text" name="name" required>
        <br>

        <button type="submit">Guardar</button>
    </form>


@endsection