<!DOCTYPE html>
<html>
<head>
    <title>Crear Área</title>
</head>
<body>

    <h1>Area</h1>

    <form action="{{ route('area.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="name" required>

        <button type="submit">Guardar</button>
    </form>

</body>
</html>