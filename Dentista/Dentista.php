<?php
    $cognome = $_REQUEST["cognome"];
    $nome = $_REQUEST["nome"];
    $numero = $_REQUEST["numero"];
    $giorno = $_REQUEST["giorno"];

    $studio = $_REQUEST["studio"];
    $trattamento = $_REQUEST["trattamento"];

    $facoltativo = $_REQUEST["facoltativo"];

    $debug=1;
    if($debug){
        echo "nome: " . $nome . "<br>";
        echo "cognome: " . $cognome . "<br>";
        echo "numero di telefono: " . $numero . "<br>";
        echo "giorno appuntamento: " . $giorno . "<br>";
        echo "studio: " . $studio . "<br>";
        echo "trattamento: " . $trattamento . "<br>";

        echo "facoltativo: ";
        foreach($opt as $facoltativo){
            echo $opt . ", ";
        }


    }
?>