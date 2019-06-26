<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos estados</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo estado</h1>
    <form method="POST" action="{{route('states.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="state[name]">
        <input type="submit" >
    </form>

</body>
</html>