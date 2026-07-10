@extends('layouts.app')

@section('content')
<body>
    <h1>Asignar Instructor a Curso</h1>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('course_teacher.store') }}" method="POST">
        @csrf
        <label>Seleccione el Curso:</label>
        <!-- El name debe coincidir con el del controlador: curse_id -->
        <select name="curse_id" required>
            <option value="">-- Seleccione Curso --</option>
            @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->course_number }}</option>
            @endforeach
        </select><br><br>

        <label>Seleccione el Instructor:</label>
        <select name="teacher_id" required>
            <option value="">-- Seleccione Instructor --</option>
            @foreach($teachers as $teacher)
            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Asignar Relación</button>
    </form>
</body>

</html>

@endsection