<style>
body {
  background-image: url('/img/welcome2.png ');
  background-size: cover;
  font-family: Arial
}

form {
  background-color: rgba(255, 255, 255, 0.9);
  border-radius: 10px;
  width: 500px;
  padding: 20px;
  margin: 50px auto;
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
</style>


<body>
        <form method="get" action="{{ url('game') }}">
            @csrf
            <label>Elige número:</label>
            <input name='num' type='text' maxlength="3"  required><br>
            <input hidden name="numIntentos" value="{{$numIntentos}}">
            <input hidden name="numCpu" value="{{$numCpu}}">
            
            <button type="submit">Comprobar número</button>
        </form>
</body>