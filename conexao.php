<?php

$host = "localhost" ;
$username = "root" ;
$Password = "" ;
$database = "data" ;

$mysqli = new mysqli($host, $username, $Password, $database);

if(!$mysqli){
    die("A conexão falhou:". mysqli_connect_error());
}




?>