<?php
$sqlQuerry= 'SELECT * FROM collaborateur;';
$recipesStatement = $bdd->prepare($sqlQuerry);
$recipesStatement->execute();
 
echo '<section id="carte_collaborateurs">'; // Ouvre le conteneur des cartes
 
while ($recipes = $recipesStatement->fetch()) {
    echo '
        <div class="carte">
            <img src="Image/photo1.jfif" id="pfp">
            <p>Nom : '.$recipes['nom'].'</p>
            <p>Prénom : '.$recipes['prenom'].'</p>
            <p>Fonction : '.$recipes['fonction'].'</p>
        </div>';
}
 
echo '</section>'; // Ferme le conteneur
echo '<a class="a" href="index.php?page=formulaireCollaborateur.php" id="formCollaborateur"><p> Ajouter </p></a>'
 
?>