<!DOCTYPE html>
<html>
<head>
    <title>Crear Computador</title>
</head>
<body>

    <h1>Nuevo Computador</h1>

    <form action="{{ route('computer.store') }}" method="POST">
        @csrf

        <label>Número:</label>
        <input type="text" name="number" required>

        <br><br>

        <label>Marca:</label>
        <input type="text" name="brand" required>

        <br><br>

        <button type="submit">Guardar</button>
    </form>

</body>
</html>