<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Exemplo Login </title>

    <link rel="stylesheet" href="estilos.css">

    <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
    <h1> Login </h1>

    <form action="verificar_login.php" method="POST">
        Username: <input name="username" type="text">
        <br> Password: <input name="password" type="password">
        <br>
        <input name="limpar" type="reset" value="Limpar">
        <input name="enviar" type="submit" value="login">
    </form>
    <br>
    <br>
    <h1> Registo </h1>

    <form action="registo.php" method="POST">
        Username: <input name="username" type="text">
        <br> Password: <input name="password" type="password">
        <br> Nome: <input name="name" type="text">
        <br>
        <input name="limpar" type="reset" value="Limpar">
        <input name="registo" type="submit" value="Registo">
    </form>

</body>
</html>