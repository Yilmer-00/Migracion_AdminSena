@extends('layouts.app')

@section('content')

<form action="{{ route('teacher.store') }}" method="POST">
    @csrf

    <label>Nombre</label>
    <input type="text" name="name">
    <br><br>

    <label>Email</label>
    <input type="email" name="email">
    <br><br>

    <label>Área</label>
    <select name="area_id">
        @foreach($areas as $area)
        <option value="{{ $area->id }}">
            {{ $area->name }}
        </option>
        @endforeach
    </select>
    <br><br>

    <label>Centro de Formación</label>
    <select name="training_center_id">
        @foreach($centers as $center)
        <option value="{{ $center->id }}">
            {{ $center->name }}
        </option>
        @endforeach
    </select>
    <br><br>

    <button type="submit">
        Guardar
    </button>
</form>

@endsection