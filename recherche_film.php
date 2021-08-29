<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche film</title>
</head>
<body>

<div><a href="index.php">Retour</a></div>

<div>Recherche </div>
<form action="result_film.php" method="POST">
<div>
    <div><input type="text" placeholder="nom" name="nom"></div>

    <div><select name="genre">
        <option value=-1>Genre</option>
        <option value=0>detective</option>
        <option value=1>dramatic comedy</option>
        <option value=2>science fiction</option>
        <option value=3>drama</option>
        <option value=4>documentary</option>
        <option value=5>animation</option>
        <option value=6>comedy</option>
        <option value=7>fantasy</option>
        <option value=8>action</option>
        <option value=9>thriller</option>
        <option value=10>adventure</option>
        <option value=11>various</option>
        <option value=12>historical</option>
        <option value=13>romance</option>
        <option value=14>western</option>
        <option value=15>music</option>
        <option value=16>musical</option>
        <option value=17>horror</option>
        <option value=18>war</option>
        <option value=19>unknow</option>
        <option value=20>spying</option>
        <option value=21>historical epic</option>
        <option value=22>biography</option>
        <option value=23>experimental</option>
        <option value=24>short film</option>
        <option value=25>erotic</option>
        <option value=26>karate</option>
        <option value=27>program</option>
        <option value=28>family</option>
        <option value=29>exp&amp;atilde;&amp;copy;rimental</option>
    </select></div>


    <div><input type="text" placeholder="distributeur" name="distributeur"></div>

</div>
    <button type="submit">Rechercher</button>
</form>
</body>
</html>