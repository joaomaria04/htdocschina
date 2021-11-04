<?php

session_start();

//error_reporting(1);

$host = "localhost";
$dbname = "teste_login";
$user = "root";
$pass = "";

$ligacao_bd = new mysqli($host,$user,$pass,$dbname);
?>