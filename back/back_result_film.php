<?php

include "config.php";

$nom = $_POST["nom"];
$distributeur = $_POST["distributeur"];
$genre = $_POST["genre"];


// vide
if(empty($nom) && empty($distributeur) && $genre == -1)
{
    echo "<div>Veuillez insérer au moins un nom, genre ou distributeur de film</div>";
}


//seulement nom
if(!empty($nom) && empty($distributeur) && $genre == -1)
{
    $reponse = $bdd->query("SELECT titre FROM film WHERE titre LIKE '$nom%'");
    while ($donnees = $reponse->fetch())
        {
            echo "<li>" .$donnees["titre"]."</li>";
        }
}
else
{
    echo "";
}


// seulement genre
if($genre == -1)
{
    echo "";
}
else {
    if(empty($nom) && empty($distributeur) && $genre !== -1)
    {
        $reponse = $bdd->query("SELECT titre FROM film WHERE id_genre = '$genre'");
        while ($donnees = $reponse->fetch())
        {
            echo "<li>" .$donnees["titre"]."</li>";
        }
    }
    else
    {
        echo "";
    }
}

//Seulement distributeur
if(empty($nom) && !empty($distributeur) && $genre == -1)
{
    $reponse = $bdd->query("SELECT film.titre FROM `film` INNER JOIN `distrib` ON film.id_distrib = distrib.id_distrib WHERE distrib.nom LIKE '$distributeur%'");
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["titre"]."</li>";
    }
}
else
{
    echo "";
}


//nom et distributeur

if(!empty($nom) && !empty($distributeur) && $genre == -1)
{
    $reponse = $bdd->query("SELECT film.titre FROM `film` INNER JOIN `distrib` ON film.id_distrib = distrib.id_distrib WHERE distrib.nom LIKE '$distributeur%' AND film.titre LIKE '$nom%'");
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["titre"]."</li>";
    }
}
else
{
    echo "";
}


//seulement nom et genre
if(!empty($nom) && empty($distributeur) && $genre !== -1)
{
    $reponse = $bdd->query("SELECT film.titre FROM `film` INNER JOIN `genre` ON film.id_genre = genre.id_genre WHERE genre.id_genre = $genre AND film.titre LIKE '$nom%'");
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["titre"]."</li>";
    }
}
else
{
    echo "";
}

//seulement genre et distributeur
if(empty($nom) && !empty($distributeur) && $genre !== -1)
{
    $reponse = $bdd->query("SELECT film.titre FROM `film` INNER JOIN `genre` ON film.id_genre = genre.id_genre INNER JOIN `distrib` ON film.id_distrib = distrib.id_distrib  WHERE genre.id_genre = $genre AND distrib.nom LIKE '$distributeur%'");
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["titre"]."</li>";
    }
}
else
{
    echo "";
}


//nom, genre et distributeur
if(!empty($nom) && !empty($distributeur) && $genre !== -1)
{
    $reponse = $bdd->query("SELECT film.titre FROM `film` INNER JOIN `genre` ON film.id_genre = genre.id_genre INNER JOIN `distrib` ON film.id_distrib = distrib.id_distrib  WHERE genre.id_genre = $genre AND distrib.nom LIKE '$distributeur%' AND film.titre LIKE '$nom%'");
    while ($donnees = $reponse->fetch())
    {
        echo "<li>" .$donnees["titre"]."</li>";
    }
}
else
{
    echo "";
}


?>