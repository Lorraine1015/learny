<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos paises</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo pais</h1>
    <form method="POST" action="{{route('countries.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="country[name]">
        <input type="submit" >
    </form>

</body>
</html>