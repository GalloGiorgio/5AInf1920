<?php
    
    $_SESSION["selezionate"]=0;
    $immagine1= $_SESSION["vettore"][$_SESSION["r1"]*2+$_SESSION["c1"]];
    $immagine2= $_SESSION["vettore"][$_SESSION["r2"]*2+$_SESSION["c2"]];
    
    
    if($immagine1==$immagine2){
        $_SESSION["TROVATO!"]=$_SESSION["TROVATO!"]+1;
        $_SESSION["coppia".$_SESSION["TROVATO!"]] = "<br> <img src=\"".$immagine1."\" width=100 height=100> <img src=\"".$immagine2."\" width=100 height=100> <br>";
        echo $_SESSION["coppia".$_SESSION["TROVATO!"]];
    }else{
        echo "<br> <img src=\"".$immagine1."\" width=100 height=100> <img src=\"".$immagine2."\" width=100 height=100> <br>";
    }

    if($_SESSION["TROVATO!"]==4){
        echo "HAI VINTO!";
    }else{
        require 'memory.html';
    }
    
    
?>