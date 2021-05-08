<?php
$db_host = 'localhost';
$db_name = 'cinema';
$db_user = 'arnaud';
$db_password = 'password';

$t = "WHERE titre LIKE 'G%'";

$bdd = new PDO("mysql:host=localhost;dbname=cinema","arnaud","password");

$reponse = $bdd->query("SELECT titre FROM film ");
while ($donnees = $reponse->fetch())
{
    echo "<p>" .$donnees["titre"]."</p>";
}
?>