<body>
        <form method="post" action="{{ url('resultado') }}">
            @csrf
            <label>Elige número:</label>
            <input name='num' type='text' maxlength="3"  required><br>
            
            <button type="submit">Guardar número</button>
        </form>
    </body>