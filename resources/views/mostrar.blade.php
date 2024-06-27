@extends('app')
@section('title','Home')

@section('sidebar')
    @parent

    

@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1><center>Formulario Mostrar</center></h1>
    <br>
    <form action="{{route('productos.formdata')}}" method="GET">
        <label for="">
            Nombre del Proyecto:
        </label>
        <br><br>
        <label for="">
            fuenteFondos:
        </label>
        <br><br>
        <label for="">
            MontoPlanificado:
        </label><br><br>
        <label for="">
            MontoPatrocinado:
        </label><br><br>
        <label for="">
            MontoFondosPropios:
        </label><br><br>
    </form>
</body>
</html>
@endsection