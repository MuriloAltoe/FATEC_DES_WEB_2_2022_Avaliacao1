<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$arquivo = fopen('cadastro.txt', 'a');

fwrite($arquivo, $_POST["desc"]. '<br>');
fwrite($arquivo, $_POST["estq"]. '<br>');
fwrite($arquivo, $_POST["preco"].'<br>');

echo('cadastrado!');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>
<body>
    <button><a href="welcome.php">Voltar ao inicio</a></button>
</body>
</html>
