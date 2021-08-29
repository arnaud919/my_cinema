<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Abo</title>
</head>
<body>

    <div><a href="index.php">Retour</a></div>

    <form action="result_modif_abo.php" method="POST">
        <div>Nom et prénom du membre</div>
        <div><input type="text" name="nommembre" placeholder="nom" required></div>
        <div><input type="text" name="prenommembre" placeholder="prenom" required ></div>
        <div>
            <select name="abo">
                <option value="0">Abonnement</option>
                <option value="1">VIP</option>
                <option value="2">GOLD</option>
                <option value="3">Classic</option>
                <option value="4">pass day</option>
            </select>
        </div>
        <input type="submit" value="mettre à jour">
    </form>



</body>
</html>