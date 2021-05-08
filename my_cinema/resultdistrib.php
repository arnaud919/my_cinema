<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        //connexion base de donnée
        $db_host = 'localhost';
        $db_name = 'cinema';
        $db_user = 'arnaud';
        $db_password = 'password';
        
        // récupérer valeurs
        $distributeur = $_POST["distributeur"];
        $nom = $_POST["nom"];

        //valeur en requete SQL

        $rnom = "film.titre LIKE '$nom%'";

        //connexion bdd
        $bdd = new PDO("mysql:host=localhost;dbname=cinema","arnaud","password");
        
        if($distributeur != -1)
        {
            $reponse = $bdd->query("SELECT film.titre FROM `film` INNER JOIN `genre` ON film.id_genre = genre.id_genre WHERE film.id_distrib = $distributeur AND $rnom");
        }
        else
        {
            $reponse = $bdd->query("SELECT film.titre FROM `film` INNER JOIN `genre` ON film.id_genre = genre.id_genre WHERE $rnom");
        }

        while ($donnees = $reponse->fetch())
        {
            echo '<p class="color">' .$donnees["titre"]."</p>";
        }

    ?>
</body>
</html>