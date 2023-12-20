<?php 

    $nome = $_POST["nome"];

    if(isset($_POST["enviar"])){
        if($nome == "bruno" || $nome == "Bruno" || $nome == "Bruno Gomes" 
        || $nome == "bruno gomes" || $nome == "Bruno gomes" || $nome == "bruno Gomes"){
            header("Location: ../html/bruno_g.html");
        }else{
            header("Location: ../php/sai_dai.php");
        }
    }

    if(isset($_POST["sim"])){
        header("Location: aceitou.php");
    }
   
?>