<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><style>
  table {
  margin: 0 auto;
  border-collapse: collapse;
  width: 80%;
  max-width: 800px;
  font-size: 1.2rem;
  text-align: center;
  background-color: #fff;
  box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.1);
}

th, td {
  padding: 12px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

tr:hover {
  background-color: #f5f5f5;
}

button {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  font-size: 1.2rem;
  border-radius: 4px;
  border: none;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
} </style>
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
    <form method="get" action="{{ url('elige') }}">
        @csrf
        <button type="submit">Volver a jugar</button>
    </form>
</body>
</html>