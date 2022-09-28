<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['usuario'] == 'fatec' and $_POST['senha'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["usuario"] = 'O Paula Souza';
         header("location: welcome.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Bem vindo!</h1>
        <button><a href="registros.php">Registros</a></button><br/><br/>
        <button><a href="cadastrar.php">Cadastrar</a></button><br/><br/>
        <button><a href="logout.php">Logout</a></button>
    </center>
</body>
</html>