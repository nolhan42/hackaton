<?php
    try{
        $bdd = new PDO ('mysql:host=localhost;dbname=hackaton',
                        'root',
                        ''
                        );
    }catch (Exception $e){
        echo "Erreur avec la base de donnée :" . $e;
    }
?>