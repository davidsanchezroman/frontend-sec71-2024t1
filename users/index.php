<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenedor de Usuario</title>
    <style>
        body{
            background-color: black;
            color: greenyellow;
            font-family: 'Courier New', Courier, monospace;

        }
    </style>
</head>
<body>
    <h1>Usuarios</h1>
    <hr>
    <button onclick="nuevoUsuario()">Nuevo Usuario</button>
    <hr>
    <div id="formulario">
        <input type="text" id="inUsername" placeholder="Ingrese Username" value="dsanchez">
        <input type="text" id="inNombre" placeholder="Ingrese Nombre" value="David Sanchez">
        <select name="" id="selRol">
            <option value="1">Owner</option>
            <option value="2">Operador</option>
        </select><br>
        
        <button onclick="nuevo()">Guardar Nuevo</button>
    </div>
    <br>
</body>
</html>