<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>
</head>
<body>

    <h1>Nueva Categoría</h1>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="name" required>

        <button type="submit">Guardar</button>
    </form>

</body>
</html>