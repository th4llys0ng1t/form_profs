<?php 

    $nome = $_POST["nome"];

    if(isset($_POST["enviar"])){
        if($nome == "bruno" || $nome == "Bruno" || $nome == "Bruno Gomes" 
        || $nome == "bruno gomes" || $nome == "Bruno gomes" || $nome == "bruno Gomes"){
            header("Location: ../html/bruno_g.html");
        }else{
            echo "Desculpa, mas você não é quem esperávamos ;/";
        }
    }
   

?>