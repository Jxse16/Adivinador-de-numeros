<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            
           
body {
  background-image: url('/img/win2.jpg');
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

form {
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 20px;
  padding: 20px;
  text-align: center;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

p {
  font-size: 24px;
  margin-bottom: 20px;
}

button {
  font-size: 20px;
  padding: 10px 20px;
  background-color: #ff6600;
  border: none;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #E7CCD2;
}

    </style>
</head>
<body>
   

    <form method="get" action="{{ url('elige') }}">
        @csrf
        <p>Acertaste. Te ha tomado {{$numIntentos}} intentos.</p>
        <button type="submit">Volver a jugar</button>
       
    </form>
    <form method="get" action="{{ url('index') }}">
        @csrf
        <button type="submit">Ver stats</button>
    </form>
</body>
</html>