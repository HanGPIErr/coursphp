<?php

include('header.php');


$connexion = new PDO(
    "mysql:dbname=cci_2022_cours;host=localhost:3306;charset=UTF8", 
    "root",
    ""
);

$requete = $connexion->prepare(
    "SELECT * FROM article WHERE id = ?"

);

$requete->execute(
    [
        $_GET['id']
]
);

$article = $requete->fetch();
?>

<h1><?= $article['titre'] ?></h1>

<p><?= $article['contenu'] ?></p>

<img src="assets/img/<?= $article['image'] ?>">

<?php include('footer.php'); ?>