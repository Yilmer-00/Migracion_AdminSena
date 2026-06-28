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

    <label>Area ID</label>
    <input type="number" name="area_id">

    <br><br>

    <label>Training Center ID</label>
    <input type="number" name="training_center_id">

    <br><br>

    <button type="submit">Guardar</button>
</form>
@endsection