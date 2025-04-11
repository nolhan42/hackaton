<?php

$sqlQuery = 'SELECT entretient.*, collaborateur.nom, collaborateur.prenom FROM entretient JOIN collaborateur ON collaborateur.idcollaborateur = entretient.personneConvoque;';
$recipesStatement = $bdd->prepare($sqlQuery);
$recipesStatement->execute();

echo '<div id="tab">
            <table>
                <tr>
                    <th><h2>Tableau des entretients </h2></th>
                </tr>
                <tr>
                    <td>';
while ($recipes = $recipesStatement->fetch()) {
if ($recipes['etat'] ===  0) {
        echo '<div id="button_tab">
                        <div id="button_inside">
                            <p>Personne convoquée: '.$recipes['nom'].' '. $recipes['prenom'].'</p>
                        </div>
                        <div id="button_inside">
                            <p>Date: '. $recipes['dates'] .'</p>
                        </div>
                        <div id="button_inside">
                            <p>Durée: '. $recipes['duree'] .' minutes</p>
                        </div>
                        <div id="button_inside">
                            <p><span style="color: orange;">État: NECESSITE UN SUIVI</span></p>
                        </div>
                    </div>';
    } else {
        echo '<div id="button_tab">
                        <div id="button_inside">
                            <p>Personne convoquée: '.$recipes['nom'].' '. $recipes['prenom'].'</p>
                        </div>
                        <div id="button_inside">
                            <p>Date: '. $recipes['dates'] .'</p>
                        </div>
                        <div id="button_inside">
                            <p>Durée: '. $recipes['duree'] .' minutes</p>
                        </div>
                        <div id="button_inside">
                            <p><span style="color: green;">État: RAS</span></p>
                        </div>
                    </div>';
    }
}
echo ' </td>
        </tr>
        </table>
        </div>
        
        <a class="a" id="button_form_e" href ="index.php?page=formulaireEntretient.php">Ajouter un entretient</a>';
?>