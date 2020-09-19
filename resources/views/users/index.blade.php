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
        {{-- <link href="{{ asset('/css/stylesheet.css') }}" rel="stylesheet"/> --}}
        {{-- <link href="{{ asset('/css/bootstrap.min/css') }} rel="stylesheet"/> --}}
        {{-- <link rel="stylesheet" href="{{ asset('/css/app.css') }}"> --}}
        {{-- <link href="{{ asset('/css/stylesheet.css') }}" rel="stylesheet"/> --}}
        {{-- <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" media="screen"> --}}
        {{-- <link href=" {{ URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="POST">
                                <div class="form-row">
                                    <div class="col-sm-3">
                                        {{-- EL 'name' HACE REFERENCIA AL NOMBRE QUE TIENEN LOS ATRIBUTOS EN LA BASE DE DATOS. --}}
                                        <input type="text" name="name" class="form-control" placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                    </div>
                                    <div class="col-auto">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{--LA TABLA NO DEBE DE SER UN DIV --}}
                    <table class="table">
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
