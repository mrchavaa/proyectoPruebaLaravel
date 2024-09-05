<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <form action="/guardar-formulario" method="POST">
        @csrf
        <h1>Formulario de contacto</h1>
        <div>
            <label for="nombre"> Nombre: </label>
            <input type="text" name="nombre"> 
        </div>

        <div>
            <label for="correo">Correo: </label>
            <input type="email" name="correo">

            @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div>
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="10"></textarea>
        </div>

        <div>
            <button id="botonEnviar" type="submit">Enviar</button>
        </div>
    </form>

</body>
</html>