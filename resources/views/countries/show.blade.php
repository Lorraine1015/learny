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
    
    <h1>Estados</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($countries->states as $item)<!-- Recorre el array  -->
                <tr>
                    <td>
                    {{$item ->id}}
                    </td>
                    <td>{{$item->name}}</td>
                </tr>
            @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>
    <p><a href="{{ route ('countries.index') }}">
    Regresar a la lista de paises</a>
    </p>
</body>
</html> 