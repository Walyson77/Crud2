<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar usuario</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Registrar usuario</div>
        <div class="contenido">
            <form action="registra.php" method='post'>
            <label for="i1">Nomes</label>
            <input type="text" id="i1" name="c1">
            <br>
            <label for="i2">Apellido paterno</label>
            <input type="text" id="i2" name="c2">
            <br>
            <label for="i3">Apellido materno</label>
            <input type="text" id="i3" name="c3">
            <br>
            <label for="i4">Correspodencia</label>
            <input type="text" id="i4" name="c4">
            <br>
            <input type="submit" value="registrar">
            </form>

        </div>
    </div>
</body>
</html>