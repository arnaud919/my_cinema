<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include "config.php";

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    if(!empty($nom) && !empty($prenom))
    {
        $reponse = $bdd->query("SELECT film.titre
                                FROM historique_membre
                                JOIN membre
                                ON membre.id_membre = historique_membre.id_membre
                                JOIN fiche_personne
                                ON membre.id_fiche_perso = fiche_personne.id_perso
                                JOIN film
                                ON film.id_film = historique_membre.id_film
                                WHERE fiche_personne.nom = '$nom' AND fiche_personne.prenom = '$prenom'
                                ");

        while ($donnees = $reponse->fetch())
        {
            echo "<li>" .$donnees["titre"]."</li>";
        }
    }

    ?>
</body>
</html>