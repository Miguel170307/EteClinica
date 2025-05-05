 <?php
    
    $idade = $_POST["years"];
    $conv = $_POST["doc"];
    
   $valortotal = 100; 

    if($conv == "sim" && $idade < 12 ){
        $valortotal = ($valortotal / 2)-10; 
        echo "<h3>O valor total é: $valortotal. </h3>";
    } 
    else if($conv == "sim" && $idade >= 60 ){
        $valortotal = ($valortotal / 2)-20; 
        echo "<h3>O valor total é: $valortotal. </h3>";
    } 
    if($conv == "nao" && $idade < 12 ){
        $valortotal = -10; 
        echo "<h3>O valor total é: $valortotal. </h3>";
    } 
    else if($conv == "nao" && $idade >=60 ){
        $valortotal = -20; 
        echo "<h3>O valor total é: $valortotal. </h3>";
    } 
    
    echo "<br>";
    echo "<br>";   
    

    echo "<br><a href='atendimento.html'><button>Voltar</button></a>";
    echo "<br><br><a href='tela.html'><button>Inicio</button></a>";



?>


