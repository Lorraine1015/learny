<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $country->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$country->id}}</h1>
    <p>{{$country->name}}</p>
    <p><a href="{{ route ('countries.index') }}">
    Regresar a la lista de paises</a>
    </p>
</body>
</html> 