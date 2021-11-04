<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Exemplo Login </title>
</head>

<body>

     <?php
        require "config.php";

        $username=$_POST['username'];
        $password=$_POST['password'];
        $name=$_POST['name'];

        if ($username and $password and $name){
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $resultado = $ligacao_bd->query($sql);
            $num_reg = $resultado->num_rows;

            //echo $num_reg;

            if($num_reg!=0){
                echo "Registo não efetuado. Já existe um utilizador com este username.";

                header("refresh:3; url=index.php");
            } else {
                $sql = "INSERT INTO users (username,password,name) VALUES ('$username', '$password', '$name')";
                $resultado = $ligacao_bd->query($sql);
                

                if($resultado==0){
                    echo "Registo não efetuado. Volte a tentar mais tarde";
                }else{
                    echo "Registo efetuado com sucesso!";
                }
                header("refresh:3; url=index.php");
            }

        
        } else {
            echo "Não preencheu todos os dados corretamente!";
            header("refresh:3; url=index.php");
        }
    ?>

</body>
</html>
