<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NÃO ACEITOU</title>
</head>
<body>
    <h1>Ele não aceitou! :|</h1>
    <form action="nao_aceitou.php" method="post">
        <input type="submit" name="voltar" value="Voltar">
    </form>
</body>
</html>

<?php 

    if(isset($_POST["voltar"])){
        header("Location: ../html/index.html");
    }

?>