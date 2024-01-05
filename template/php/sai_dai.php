<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Não é você</title>
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

    .bg{
        background-color: #303049;
        width: 700px;
        height: 100px;
        border-radius: 50px;
        padding: 10px;
    }
</style>
<body>
    <center>
        <div class="bg">
            <h1>Desculpa. Você não é quem esperávamos.</h1>
        </div>
        <form action="sai_dai.php" method="post">
            <input type="submit" name="voltar" value="Voltar">
        </form>
    </center>
</body>
</html>

<?php 
    if(isset($_POST["voltar"])){
        header("Location: ../../index.html");
    }
?>