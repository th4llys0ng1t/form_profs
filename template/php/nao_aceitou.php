<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NÃO ACEITOU</title>
</head>
<style>
    html, body{
    background-image: url(../img/fundo.png);
    background-repeat: no-repeat;
    background-size: cover;
    }
    h1{
        color: #ffff;
    }
    form [type="submit"]{
        text-transform: uppercase;
        font-weight: bold;
        color: #303049;
        
        border: none;
        margin-top: 20px;
        width: 209px;
        height: 40px;
    }
</style>
<body>
    <center>
    <h1>Ele não aceitou! :|</h1>
    <form action="nao_aceitou.php" method="post">
        <input type="submit" name="voltar" value="Voltar">
    </form>
    </center>
</body>
</html>

<?php 

    if(isset($_POST["voltar"])){
        header("Location: ../html/index.html");
    }

?>