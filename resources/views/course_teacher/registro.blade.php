@extends('layouts.app')

@section('content')

    <h1>Asignar Instructor a un Curso</h1>

    @if(session('success'))
        <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('course_teacher.admin') }}" method="POST">
        @csrf

        <label for="curse_id">Seleccione el Curso (Ficha):</label><br>
        <select name="curse_id" id="curse_id" required>
            <option value="">-- Seleccione un Curso --</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->course_number }} - {{ $course->day }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="teacher_id">Seleccione el Instructor:</label><br>
        <select name="teacher_id" id="teacher_id" required>
            <option value="">-- Seleccione un Instructor --</option>
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }} ({{ $teacher->email }})</option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Asignar Instructor</button>
    </form>

@endsection