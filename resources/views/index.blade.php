<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
    <tr>
        <th>Numero de partida</th>
        <th>Numero de intentos</th>
        <th>Numero de la CPU</th>
    </tr>
        @foreach ($games as $game)
        <tr>
        <th>{{$game->id}}</th>
        <th>{{$game->tries}}</th>
        <th>{{$game->machine_choice}}</th>
    </tr>

        @endforeach
    </table>
</body>
</html>