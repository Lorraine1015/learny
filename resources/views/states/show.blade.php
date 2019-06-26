<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $state->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$state->id}}</h1>
    <p>{{$state->name}}</p>
    <p><a href="{{ route ('states.index') }}">
    Regresar a la lista de estados</a>
    </p>
</body>
</html> 