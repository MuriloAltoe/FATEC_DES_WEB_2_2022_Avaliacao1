<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$arquivo = fopen('cadastro.txt', 'a');

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <div class="page-header">
        
    </div>

    <form action="cadastro.php" method="POST">
        <h1>Você pode cadastrar 1 produto!</h1>

        <h3>Descrição</h3>
        <input type="text" name="desc" id="desc">
        <h3>Esoque</h3>
        <input type="text" name="estq" id="estq">
        <h3>Preço</h3>
        <input type="text" name="preco" id="preco">
        <br><br>
        <input type="submit" value="Cadastrar B)">
    </form>

    <p>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>