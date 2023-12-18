<?php 

    if(isset($_POST["sim"])){
        header("Location: ../html/aceitou.html");
    }

    if(isset($_POST["nao"])){
        header("Location: ../html/nao_aceitou.html");
    }
    
?>