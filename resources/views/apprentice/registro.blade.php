<html lang="en">
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Aprendices</title>
</head>

<body>
    <h1>Crear Nuevo Aprendiz</h1>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('apprentice.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Número de Celular:</label>
        <input type="text" name="cell_number" required><br><br>

        <label>Curso asignado:</label>
        <select name="course_id" required>
            <option value="">-- Seleccione Curso --</option>
            @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->course_number }} - {{ $course->day }}</option>
            @endforeach
        </select><br><br>

        <label>Computador asignado:</label>
        <select name="computer_id" required>
            <option value="">-- Seleccione Computador --</option>
            @foreach($computers as $computer)
            <option value="{{ $computer->id }}">{{ $computer->brand }} (N° {{ $computer->number }})</option>
            @endforeach
        </select><br><br>

        <button type="submit">Guardar Aprendiz</button>
    </form>
</body>

</html>