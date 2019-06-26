<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar estado</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar estado</h1>
    <form method="POST"  action="{{route('states.update',['state'=>$state])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$state->name}}" name="state[name]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <input type="submit" value="Editar">
    </form>
</body>
</html> 