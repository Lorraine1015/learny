<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Estados</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Estados</h1>
    <a href="{{route('states.create')}}">
    Crear un estado
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
            @foreach($states as $state)
                <tr>
                    <td>
                        <a href="{{route('states.show',['state'=>$state]) }}">
                            {{$state->id}}
                        </a>
                    </td>
                    <td>{{$state->name}}</td>
                    <td>
                        <a href="{{route('states.edit',['state'=>$state]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('states.delete',['state'=>$state])}}">
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