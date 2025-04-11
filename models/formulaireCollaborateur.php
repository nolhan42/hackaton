<?php
    $sqlQuery ='INSERT INTO collaborateur(nom, prenom, introduction, dateDeNaissance, fonction, dernierDiplome) VALUE("'.$_POST['lastname'].'", "'.$_POST['firstName'].'", "'.$_POST['intro'].'", "'.$_POST['dateNaissance'].'", "'.$_POST['fonction'].'", "'.$_POST['lastDiplome'].'")';
    $recipesStatement = $bdd->prepare($sqlQuery);
    $recipesStatement->execute();
?>