<html>
    <head>
        <title>FormulaireCampagne</title>
        <link rel="stylesheet" href="/Petit_magicien/CSS/styles.css">    
    </head>
    <body>
        <main>
            <div id="form">
                <div id="form_title">
                    <h2>Création d'un nouvel entretient</h2>
                </div>

                <form name="form" action="/hackatonSLAM/hackaton/index.php?page=entretient.php" id="form_c" method="post">
                    <br> 
                    <div class="form-row">
                        <label id="date">Date:</label>
                        <input type="date" value="" name="date"/>
                        <label id="duree">Durée:</label>
                        <input type="text" value="" name="duree"/>
                        <label>personneConvoque:</label>
                            <select name="personneConvoque" required>
                                <option value="">Sélectionner un collaborateur</option>
                                <?php
                                    try {
                                        $sql = "SELECT idCollaborateur, nom, prenom FROM collaborateur"; // Récupère lesnom et id dans la table
                                        $rstm = $bdd->query($sql);

                                        while ($row = $rstm->fetch()) {
                                            echo "<option value='{$row['idCollaborateur']}'>{$row['nom']} {$row['prenom']}</option>"; //affichage des différent compte utilisateur existant
                                        }
                                    } catch (Exception $e) {
                                        echo "<option value=''>Erreur lors du chargement</option>";
                                    }
                                ?>
                            </select>

                        <div class="form-group">
                            <label for="message">Activité</label>
                            <textarea name="activite" id="message" placeholder="Votre message ici..."></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Point Positif(s)</label>
                            <textarea name="pointPositif" id="message" placeholder="Votre message ici..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="message">Difficultées rencontrées</label>
                            <textarea name="difficultesRencontrees" id="message" placeholder="Votre message ici..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="message">Ressenti</label>
                            <textarea name="ressenti" id="message" placeholder="Votre message ici..."></textarea>
                        </div>

                        <label>Besoin de formation:</label>
                        <input type="radio" value="oui" name="besoinFormation"/>Oui
                        <input type="radio" value="non" name="besoinFormation"/>Non

                        <div class="form-group">
                            <label for="message">Objectifs</label>
                            <textarea name="objectifDebouche" id="message" placeholder="Votre message ici..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="message">Commentaire</label>
                            <textarea name="commentaire" id="message" placeholder="Votre message ici..."></textarea>
                        </div>

                        <label>Etat:</label>
                        <input type="radio" value="ras" name="etat"/>RAS
                        <input type="radio" value="suivi" name="etat"/>Besoin d'un Suivi
                        
                    </div>
                    <br>
                    <input id="creer" type="submit" value="Créer" name="submit"/>
                    <br>                   
                </form>
            </div>
        </main> 
    </body>
</html>