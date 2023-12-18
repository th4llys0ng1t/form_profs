<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Não é você</title>
</head>
<body>
    <h1>Desculpa. Você não é quem esperávamos.</h1>
    <form action="sai_dai.php" method="post">
        <input type="submit" name="voltar" value="Voltar">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["voltar"])){
        header("Location: ../html/index.html");
    }
?>