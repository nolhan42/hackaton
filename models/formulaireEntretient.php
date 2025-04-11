<?php
if (!empty($_POST['personneConvoque'])){
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $sqlQuery = 'INSERT INTO entretient (dates, duree, personneConvoque, activite, pointPositif, difficultesRencontrees, ressenti, besoinFormation, objectifDebouche, commentaire, etat) 
            VALUES (:dates, :duree, :personneConvoque, :activite, :pointPositif, :difficultesRencontrees, :ressenti, :besoinFormation, :objectifDebouche, :commentaire, :etat)';
        $rstm = $bdd->prepare($sqlQuery);
        $rstm->bindParam(':dates', $_POST['dates']);
        $rstm->bindParam(':duree', $_POST['duree']);
        $rstm->bindParam(':personneConvoque', $_POST['personneConvoque']);
        $rstm->bindParam(':activite', $_POST['activite']);
        $rstm->bindParam(':pointPositif', $_POST['pointPositif']);
        $rstm->bindParam(':difficultesRencontrees', $_POST['difficultesRencontrees']);
        $rstm->bindParam(':ressenti', $_POST['ressenti']);
        $rstm->bindParam(':besoinFormation', $_POST['besoinFormation']);
        $rstm->bindParam(':objectifDebouche', $_POST['objectifDebouche']);
        $rstm->bindParam(':commentaire', $_POST['commentaire']);
        $rstm->bindParam(':etat', $_POST['etat']);
        $rstm->execute();
    
        header("Location: index.php?page=entretient.php");
        exit();
    
    } catch (Exception $e) {
        echo "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
}

?>