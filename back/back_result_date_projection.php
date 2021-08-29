<?php

    include "config.php";

    $date = $_POST["date"];
    $time = $_POST["time"];

    $requeste = "$date $time:00";

    $temps = ("SELECT *
    FROM grille_programme 
    INNER JOIN film 
    ON film.id_film = grille_programme.id_film
    WHERE grille_programme.debut_sceance = '$date $time:00'");

    $requete1 = $bdd->query($temps);

    while($donnees = $requete1->fetch())
    {
        echo "<table>
                <tbody>
                    <tr>
                        <td>
                            <span>".$donnees["titre"]."</span> :
                        </td>
                        <td>
                            <span>".$donnees["debut_sceance"]."</span> 
                        </td>
                    </tr>
                </tbody>
             </table>";
    }
?>