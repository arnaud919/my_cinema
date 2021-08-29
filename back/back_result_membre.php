<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat membre</title>
</head>
<body>
<?php


include "config.php";

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];


//rien
if(empty($prenom) && empty($nom))
{
    echo "<di>Veuillez insérer un nom ou un prénom</div>";
}

//Seulement prénom
if(!empty($prenom) && empty($nom))
{
    $reponse = $bdd->query("SELECT prenom, nom FROM fiche_personne WHERE prenom LIKE '$prenom%' ");
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["nom"]." ".$donnees["prenom"]."</li>";
    }
}
else
{
    echo "";
}


//Seulement nom
if(empty($prenom) && !empty($nom))
{
    $reponse = $bdd->query("SELECT prenom, nom FROM fiche_personne WHERE nom LIKE '$nom%' ");
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["nom"]." ".$donnees["prenom"]."</li>";
    }
}
else
{
    echo "";
}


//Nom et prénom

if(!empty($prenom) && !empty($nom))
{
    $reponse = $bdd->query("SELECT prenom, nom FROM fiche_personne WHERE nom LIKE '$nom%' AND prenom LIKE '$prenom%' ");
    
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["nom"]." ".$donnees["prenom"]."</li>";
    }
}
else
{
    echo "";
}



?>
</body>
</html>