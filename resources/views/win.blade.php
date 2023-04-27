<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Acertaste</p> Te ha tomado {{$numIntentos}} intentos.

    <form method="get" action="{{ url('elige') }}">
        @csrf
        <button type="submit">Volver a jugar</button>
    </form>
    <form method="get" action="{{ url('index') }}">
        @csrf
        <button type="submit">Ver stats</button>
    </form>
</html>