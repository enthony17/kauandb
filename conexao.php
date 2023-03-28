<?php

$servername="localhost";
    $username="id20481152_kauan";
    $password="@Kemsgta1234";
    $database="id20481152_database";
    //cria conexão
    $conn=new mysqli($servername,$username,$password,$database);
    //testa conexão
    if ($conn->connect_error){
        die("conexão com db falhou:".$conn->connect_error);
    }
    echo"conectado ao db";
    ?>