<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Exemplo Login </title>
</head>

      <?php
          require "config.php";

          $id_user=$_GET['id_user'];

          $sql = "DELETE FROM users WHERE id_user = '$id_user'";
          $resultado = $ligacao_bd->query($sql);
          //$num_reg = mysqli_num_rows($resultado);

          if($resultado==0){
              echo "Eliminação não efetuada! Tente mais tarde.";

          } else {
              echo"Eliminação efetuada!";

          }
          header("refresh:3; url=entrou.php");
    ?>

</body>
</html>    