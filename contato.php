<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Contato</title>
</head>
<body>
    <h1>Inserir Contato</h1>
    <form action="contato.php">
        <label>Nome:</label><br>
        <input type="text" name="fnome"><br>
        <label>Sobrenome:</label><br>
        <input type="text" name="fsobrenome"><br>
        <label>Telefone:</label><br>
        <input type="text" name="ftelefone"><br><br>
        <input type="submit" value="Gravar">
</form>
<a href="index.php">Consultar agenda</a>

<?php
include"conexao.php";
?>
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    //coleta dados do formulario
    $nome=$_POST["fnome"];
    $sobrenome=$_POST["fsobrenome"];
    $telefone=$_POST["ftelefone"];
    //inserir dados na tabela
    $sql="INSERT INTO agenda(nome, sobrenome, telefone) VALUES('$nome','$sobrenome','$tele')";
    if($conn->query($sql)===TRUE){
        echo"dados inseridos"."<br>";   
    }else{
        echo"ERRO:".$conn->error;
    }
}
$conn->close();
?>
