<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmes</title>
</head>
<body>
    <form action="{{ url('filmes') }}" method="POST">
        @csrf
        <input type="checkbox" name="categoria[]" value="Terror" id=""> TERROR<br>
        <input type="checkbox" name="categoria[]" value="Acao" id=""> ACAO<br>
        <input type="checkbox" name="categoria[]" value="Romance" id=""> COMANCE<br>

        <input type="submit" value="">
    </form>
    
</body>
</html>