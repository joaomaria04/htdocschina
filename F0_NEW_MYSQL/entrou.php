<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Exemplo Login </title>

    <link rel="stylesheet" href="estilos.css">

    <script type="text/javascript" src="javascript.js"></script>

</head>

<body>

    <?php
       require "config.php";

       $nome=$_SESSION['name_user'];
       $ultima_data=$_SESSION['last_login'];

       echo "<p>O utilizador $nome está ligado!</p>";
       echo "<p>O ultimo login foi efetuado pela última vez em: $ultima_data </p>";

       echo "<h3> Lista de Utilizadores </h3>";

       $sql = "SELECT * FROM users ORDER BY id_user";
       $resultado = $ligacao_bd->query($sql);
       $num_reg = $resultado->num_rows;

       if($num_reg==0){

        echo "Sem registos na base de dados.";

       } else {

        ?>

        <table align='center' width='600px' border='1'>

        <tr><td>ID</td><td>Username</td><td>Nome</td><td>Eliminar</td></tr>

        <?php

        while ($registo = $resultado->fetch_assoc()){
            $id_user = $registo['id_user'];
            $username = $registo['username'];
            $name = $registo['name'];

            ?>

            <tr>
                <td align="center"><?php echo $id_user; ?></td>
                <td align="center"><?php echo $username; ?></td>
                <td><?php echo $name; ?></td>
                <td align="center"><img onclick="ConfirmaApagar('<?php echo $id_user; ?>','<?php echo $name; ?>')"
                src="eliminar.png" width="16" height="16" alt="Eliminar" /></td>
        </tr>

        <?php
        }
        ?>
        </table>
        <?php
       }

       ?>

       <form action="sair.php" method="POST">
           <input name="sair" type="submit" value="Sair">
    </form>

    </body>
    </html>
