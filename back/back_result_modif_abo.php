<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
</head>
<body>

    <?php

    $nommembre=$_POST["nommembre"];
    $prenommembre=$_POST["prenommembre"];
    $abo=$_POST["abo"];

      include "config.php";

      try {

        $modif = ("UPDATE membre
        INNER JOIN fiche_personne
        ON membre.id_fiche_perso = fiche_personne.id_perso 
        SET membre.id_abo = $abo
        WHERE fiche_personne.nom = '$nommembre' AND fiche_personne.prenom = '$prenommembre'" 
        );
        
        $requete = $bdd->prepare($modif);
        
        $requete->execute();
        
      echo "Mise à jour réussi " .$requete->rowCount() . " modifications ont été effecutés";

      } catch(PDOException $e) {
        echo $modif . "<br>" . $e->getMessage();
      }
      
      $bdd = null;

    ?>
</body>
</html>