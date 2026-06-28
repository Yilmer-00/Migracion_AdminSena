@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Curso</h1>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('course.admin') }}" method="POST">
        @csrf
        <label>Número de Curso:</label>
        <input type="text" name="course_number" required><br><br>

        <label>Día / Jornada:</label>
        <input type="text" name="day" required><br><br>

        <label>Área:</label>
        <select name="area_id" required>
            <option value="">-- Seleccione Área --</option>
            @foreach($areas as $area)
            <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select><br><br>

        <label>Centro de Formación:</label>
        <select name="training_center_id" required>
            <option value="">-- Seleccione Centro --</option>
            @foreach($trainig_centers as $center)
            <option value="{{ $center->id }}">{{ $center->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Guardar Curso</button>
    </form>
@endsection