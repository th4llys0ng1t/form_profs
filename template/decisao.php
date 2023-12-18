<?php 

    if(isset($_POST["sim"])){
        header("Location: aceitou.html");
    }

    if(isset($_POST["nao"])){
        header("Location: nao_aceitou.html");
    }
    
?>