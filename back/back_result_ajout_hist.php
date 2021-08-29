<?php

include "config.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$film = $_POST["film"];
$avis = $_POST["avis"];

if(!empty($nom) && !empty($prenom))
{
    $testnom = ("SELECT id_abo 
    FROM membre 
    INNER JOIN fiche_personne 
    ON fiche_personne.id_perso = membre.id_fiche_perso 
    WHERE fiche_personne.nom = '$nom' AND fiche_personne.prenom = '$prenom'");

    $testernom = $bdd->query($testnom);

    $donneesnom = $testernom->fetch();
    $infonom = $donneesnom["id_abo"];

    if($infonom == FALSE)
    {
        echo "<div> Le nom et/ou prénom de cette personne est incorrect ou n'existe pas</div>";
    }
    else
    {
        $testfilm = ("SELECT id_film 
        FROM film 
        WHERE titre = '$film'");
    
        $testerfilm = $bdd->query($testfilm);
    
        $donneesfilm = $testerfilm->fetch();
        $infofilm = $donneesfilm["id_film"];

        if($infofilm == FALSE)
        {
            echo "<div>Le film n'existe pas ou est incorrect</div>";
        }
        else

        if(empty($avis))
        {
            $membre = ("SELECT membre.id_membre 
            FROM membre 
            INNER JOIN fiche_personne 
            ON membre.id_fiche_perso = fiche_personne.id_perso 
            WHERE fiche_personne.nom = '$nom' 
            AND fiche_personne.prenom = '$prenom'");

            $movie = ("SELECT id_film
            FROM film
            WHERE titre = '$film'");

            $requete1 = $bdd->query($membre);
            $requete2 = $bdd->query($movie);

            $donnees1 = $requete1->fetch();
            $donnees2 = $requete2->fetch();

            $infos1 = $donnees1["id_membre"];
            $infos2 = $donnees2["id_film"];

            $historique =("INSERT INTO historique_membre VALUES ('$infos1','$infos2',NOW(), NULL)");

            $requete3 = $bdd->prepare($historique);

            $requete3->execute();

            echo "<div>L'historique a été rajouté</div>";
        }
        else
        {
            $membre = ("SELECT membre.id_membre 
            FROM membre 
            INNER JOIN fiche_personne 
            ON membre.id_fiche_perso = fiche_personne.id_perso 
            WHERE fiche_personne.nom = '$nom' 
            AND fiche_personne.prenom = '$prenom'");

            $movie = ("SELECT id_film
            FROM film
            WHERE titre = '$film'");

            $requete1 = $bdd->query($membre);
            $requete2 = $bdd->query($movie);

            $donnees1 = $requete1->fetch();
            $donnees2 = $requete2->fetch();

            $infos1 = $donnees1["id_membre"];
            $infos2 = $donnees2["id_film"];

            $historique =("INSERT INTO historique_membre VALUES ('$infos1','$infos2',NOW(),'$avis')");

            $requete3 = $bdd->prepare($historique);

            $requete3->execute();

            echo "<div>L'historique avec l'avis a été rajouté</div>";
        }
    }

}
else
{
    echo "Une erreur est arriv";
}
?>

</body>
</html>