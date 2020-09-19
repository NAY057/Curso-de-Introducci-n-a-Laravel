<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-sm-15 mx-auto">
                    <table>
                        {{-- Encabezado de la tabla --}}
                        <div class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                {{-- &nbsp; deja una celda en blanco en la base de datos la cualsera ocupada por el boton de eliminar --}}
                                <th>&nbsp;</th>
                            </tr>
                        </div>
                        {{-- <thead-dark>

                        </thead> --}}
                        <tbody>
                            {{-- Contenido de la tabla --}}
                            @foreach ($users as $user)
                            {{-- tr son las filas --}}
                            {{-- td son las columnas --}}
                                <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form action="{{route('user.destroy', $user)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger"
                                        onclick="return comfirm('¿Desea eliminar...?')">
                                    </form>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
