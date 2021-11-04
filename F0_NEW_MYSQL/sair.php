<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Exemplo Login </title>
</head>

<body>
    
    <?php

    require "config.php";

    session_destroy();

    echo "Terminou sessão com sucesso!";

    header("refresh:3; url=index.php");
    ?>

</body>
</html>
