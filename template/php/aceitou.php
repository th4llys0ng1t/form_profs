<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELE ACEITOU</title>
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
            <h1>Ele aceitou! :D. Você é incrível BG</h1>
        </div>  
        <form action="aceitou.php" method="post">
            <input type="submit" name="obrigado" value="Muito obrigado, Bruno!!">
        </form>
    </center> 
</body>
</html>

<?php 

    if(isset($_POST["obrigado"])){
        header("Location: ../html/index.html");
    }

?>