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
  font-size: 24px; 
  padding: 10px 20px; 
  background-color: #ff6600; 
  color: #fff; 
  display: block;
    margin: 0 auto;
    margin-top: 400px;
    margin-bottom: 100px;
    border-radius: 10px;
    cursor:pointer;
    
}
body {
    background-image: url('/img/welcome2.png');
    
  
}


button:hover {
    background-color: #E7CCD2;
}
        </style>
    
    </head>
    <body class="antialiased">
    
  
    <form method="get" action="{{ url('elige') }}">
    @csrf
    <button  class="btn" type="submit" >JUEGA</button>
    
</html>
