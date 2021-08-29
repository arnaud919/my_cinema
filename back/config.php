<?php

$db_host = 'localhost';
$db_name = 'cinema';
$db_user = 'arnaud';
$db_password = 'ArnaColo0908**';

try
{
    $bdd = new PDO("mysql:host=$db_host;dbname=$db_name","$db_user","$db_password");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $modif . "<br>" . $e->getMessage();
}

?>