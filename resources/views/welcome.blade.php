<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    
   
        <!-- Styles -->
        <style>
            
                .btn {
  font-size: 24px; /* Tamaño de fuente de los botones */
  padding: 10px 20px; /* Espaciado interno de los botones */
  background-color: #ff6600; /* Color de fondo del botón */
  border: none; /* Quitamos el borde por defecto */
  color: #fff; /* Color del texto del botón */
}
body {
    background-image: url('/img/welcome2.png');
    
  
}

button {
    display: block;
    margin: 0 auto;
    margin-top: 400px;
    margin-bottom: 100px;
    font-size: 150px;
    padding: 10px 20px;
    background-color: #E7CCD2;
    border: none;
    color: #E7CCD2;
    border-radius: 4px;
    cursor:pointer;
}

button:hover {
    background-color: #E7CCD2;
}
        </style>
    
    </head>
    <body class="antialiased">
    <!-- <div>
    <img src="/img/welcome2.png" alt="" srcset="">
    <form method="get" action="{{ url('elige') }}">
    @csrf
    <button  class="btn" type="submit" >JUEGA</button>
    </div> -->
  
    <form method="get" action="{{ url('elige') }}">
    @csrf
    <button  class="btn" type="submit" >JUEGA</button>
    
</html>
