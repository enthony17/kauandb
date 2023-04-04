<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste php</title>
</head>
<body>  

<center>
    <img src="./img/chuck.jpg"></img>
</center>

    <center>
    <h1>Sick</h1>
</center>
    <?php
    //kauan, ana julia, amanda
    //echo"isso é php"<br>;
   
    ?>
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
   
    $sql = "SELECT nome, sobrenome, telefone FROM agenda";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      echo "Nome:". $row["nome"]. " Sobrenome:". $row["sobrenome"]. " Telefone:". $row["telefone"]."<br>";

    }
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
    ?>

    <a href="login.php">Consultar cadastro</a>
</body>
</html>

