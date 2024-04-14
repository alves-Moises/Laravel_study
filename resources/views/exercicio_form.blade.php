<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form-exercicio/store" method="post">

        @csrf 
        @method("PATCH")
        <input type="number" name="idade" id="idade" placeholder="digite a idade: ">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>