<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paises</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Paises</h1>
    <a href="{{route('countries.create')}}">
    Crear un pais
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
                <tr>
                    <td>
                        <a href="{{route('countries.show',['country'=>$country]) }}">
                            {{$country->id}}
                        </a>
                    </td>
                    <td>{{$country->name}}</td>
                    <td>
                        <a href="{{route('countries.edit',['country'=>$country]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('countries.delete',['country'=>$country])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 