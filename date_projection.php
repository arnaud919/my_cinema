<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date projection</title>
</head>
<body>
    <div><a href="index.php">Retour</a></div>

    <form action="result_date_projection.php" method="POST">
        <label>Date et heure du film</label>
        <div>
            <input type="date" name="date">
            <input type="time" name="time">
        </div>
        <div><input type="submit" value="Envoyer"></div>
    </form>

</body>
</html>