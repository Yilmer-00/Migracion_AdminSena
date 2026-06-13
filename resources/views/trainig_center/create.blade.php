<!DOCTYPE html>
<html>
<head>
    <title>Crear Centro de Formación</title>
</head>
<body>

    <h1>Nuevo Centro de Formación</h1>

    <form action="{{ route('trainig-center.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>Ubicación:</label>
        <input type="text" name="location" required>

        <br><br>

        <button type="submit">Guardar</button>
    </form>

</body>
</html>