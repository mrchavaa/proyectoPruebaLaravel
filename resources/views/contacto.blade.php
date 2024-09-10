<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <form action="/guardar-formulario" method="POST">



        <h1>Formulario de contacto para {{ $tipo_usuario }}
        </h1>
        @csrf
        @if($tipo_usuario == 'cliente')
            <label for="no_cliente"> No. de cliente </label> <br>
            <input type="text" name="no_cliente" value="{{ old('no_cliente') }}" >
        @endif
        <div>
            <label for="nombre"> Nombre: </label>
            <input type="text" name="nombre" value=" {{ old('nombre') }} " > 
        </div>

        <div>
            <label for="correo">Correo: </label>
            <input type="email" name="correo" value=" {{ old('correo') }} " >

            @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div>
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="10">{{ old('mensaje') }} </textarea>
        </div>

        <div>
            <button id="botonEnviar" type="submit">Enviar</button>
        </div>
    </form>

</body>
</html>