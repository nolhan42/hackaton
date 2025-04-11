<main>
<link href="style/style.css" rel="stylesheet" type="text/css" />
    <form action="" method="post">
        <h1>Ajout d'un collaborateur</h1><br>
        <h2>nom : </h2>
        <input type="text" name="lastname" require><br>
 
        <h2>prenom : </h2>
        <input type="text" name="firstName" require><br>
 
        <h2>introduction : </h2>
        <input type="text" name="intro" require><br>
 
        <h2>date de naissance : </h2>
        <input type="date" name="dateNaissance" require><br>
 
        <h2>Fonction : </h2>
        <input type="text" name="fonction" require><br>
 
        <h2>dernier diplome : </h2>
        <input type="text" name="lastDiplome" require><br>
        <input type="submit" name="creation" value="ajout d'un collaborateur">
    </form>
    <a class="a" href="index.php?page=collaborateur.php" id="Collaborateur"><p> retour </p></a>