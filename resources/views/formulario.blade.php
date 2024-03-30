<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form name="form" action="/formulario/store/15" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nome" id="nome" placeholder="DIgite seu nome:">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>