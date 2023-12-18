<?php 

    if(isset($_POST["sim"])){
        header("Location: aceitou.php");
    }

    if(isset($_POST["nao"])){
        header("Location: nao_aceitou.php");
    }
    
?>