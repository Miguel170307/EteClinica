<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
<?php
    
    $hora = $_POST["hm"];
    $especi = $_POST["tp"];
    

    if($hora  < 8 ){
        echo "<h3>O horário de funcionamento é das 8h às 17h. </h3>";
    } 
    else if($hora > 17){
        echo "<h3>O horário de funcionamento é das 8h às 17h. </h3>";
    }
    
    if($especi == "esp"){
        echo " <h3> Informe qual é o tipo de especialista.</h3> <input type='text'>";
    }
    echo "<br>";
    echo "<br>";   
    echo "<button type='submit'> Enviar</button>";
    

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<br><a href='agendamento.html'><button>Voltar</button></a>";
    echo "<br><br><a href='tela.html'><button>Inicio</button></a>";
  
?>

    </body>
</html>
