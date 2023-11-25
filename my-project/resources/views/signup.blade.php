

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Crear un usuari</title>
</head>
<body>
    <h1>{{ $titol }}</h1>
    <form action="../crear_usuari/index.php" method="POST">
        <label>ID:</label>
        <input type="number" name="id" required><br><br>

        <label>Rol:</label>
        <select name="rol" required>
            <option value="alumnat">Alumnat</option>
            <option value="professorat">Professorat</option>
        </select><br><br>

        <label>Nom:</label>
        <input type="text" name="name" required><br><br>

        <label>Cognom:</label>
        <input type="text" name="surname" required><br><br>

        <label>Contrasenya:</label>
        <input type="password" name="password" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Actiu:</label>
        <input type="checkbox" name="active" value="1"><br><br>

        <input type="submit" value="Guardar">
    </form>
    <a href="signin.blade.php"></a><br>
    <a href="{{ route('signin') }}">Iniciar sessió</a><br>

</body>
</html>

