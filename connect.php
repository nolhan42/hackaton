<?php
    try{
        $bdd = new PDO('mysql: localhost; dbname=hackaton',
        'root',
        '');
    }
    catch(Exeption $e){
        echo "erreur avec la bdd : ".$e;
    }
?>