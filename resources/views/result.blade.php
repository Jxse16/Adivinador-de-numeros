<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>

    <p>El usuario ha escogido {{$numUser}}</p>
    <p>La CPU ha escogido {{$numCpu}}</p>
    <p>num Intentos = {{$numIntentos}}</p>
    <p>El resultado es: {{$result[0]}} 
    @isset($result[1])
        <br>{{$result[1]}}
    @endisset
    <form method="get" action="{{ url('elige') }}">
        @csrf
        <input hidden name="numIntentos" value="{{$numIntentos}}">
        <input hidden name="numCpu" value="{{$numCpu}}">
        <button type="submit">Volver a jugar</button>
    </form>
    </p>
</body>
</html>