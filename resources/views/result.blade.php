<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  background-image: url('/img/welcome2.png ');
  background-size: cover;
  font-family: Arial, sans-serif;
}

form {
  background-color: rgba(255, 255, 255, 0.9);
  border-radius: 10px;
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.3);
  width: 500px;
  padding: 20px;
  margin: 50px auto;
  text-align:center;
}

label {
  font-size: 18px;
  display: block;
  margin-bottom: 10px;
}

input[type="text"] {
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
  width: 100%;
  margin-bottom: 20px;
}

button[type="submit"] {
  background-color: #2196F3;
  color: #fff;
  font-size: 18px;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  
}

button[type="submit"]:hover {
  background-color: #0D47A1;
}
h1 {
    font-size: 50px;
  margin-bottom: 20px;
  color:white;
  text-align:center;
  -webkit-text-stroke: 1px black;
  text-stroke: 1px black;

}
p {
    font-size: 45px;
  margin-bottom: 20px;
  color:white;
  text-align:center;
  -webkit-text-stroke: 1.5px black;
  text-stroke: 2px black;
}

</style>
</head>
<body>
    
    <h1>Resultado</h1>

    <p>El usuario ha escogido {{$numUser}}</p>
    <p>num Intentos = {{$numIntentos}}</p>
    <p>El resultado es: {{$result[0]}} 
    @isset($result[1])
        <br>{{$result[1]}}
    @endisset
</p>
    <form method="get" action="{{ url('elige') }}">
        @csrf
        <input hidden name="numIntentos" value="{{$numIntentos}}">
        <input hidden name="numCpu" value="{{$numCpu}}">
        <button type="submit">Reintentar</button>
    </form>
   
</body>
</html>