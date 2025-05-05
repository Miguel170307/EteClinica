<?php
    
    $idade = $_POST["years"];
    $nome = $_POST["name"];
   
    if($idade< 12 ){
        echo "<h3>O paciente é uma criança. </h3>";
    } else if($idade < 60){
        echo "<h3> O paciente é um adulto. </h3>";
    } 
    else if($idade <=60) {
        echo "<h3> O paciente é um idoso. </h3>";
    } 
    else if($idade < 0) {
        echo "<h3> Erro. </h3>";
    } 

    echo "<br><a href='paciente.html'><button>Voltar</button></a>";
    echo "<br><br><a href='tela.html'><button>Inicio</button></a>";
    
?>
