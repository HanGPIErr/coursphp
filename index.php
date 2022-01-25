<?php
session_start(); 

$connexion = new PDO(
    "mysql:dbname=cci_2022_cours;host=localhost:3306;charset=UTF8", 
    "root",
    ""
);

$requete = $connexion->prepare("SELECT * FROM article");

$requete->execute();

$mesArticles = $requete->fetchAll();

include('header.php');


?>

<div class="container">
    <div class="row">

<?php
    foreach($mesArticles as $article) {
?>


<div class="col-6">
    <div class="card mb-3">
        <h3 class="card-header"><?= $article["titre"] ?></h3>
        <div class="card-body">
            <h5 class="card-title"></h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
         </div>
         <a style="text-decoration:none"; href="article.php?id=<?= $article['id'] ?>">
             <img style="width:100%;height:200px; object-fit:cover" class="imagecard img-thumbnail" src="assets/img/<?=$article['image'] ?>">
         </a>
                 
        <div class="card-body">
         <p class="card-text"><?= substr($article["contenu"], 0,100) ?>...</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        <div class="card-footer text-muted">
    2 days ago
        </div>
    </div>
</div>

<?php } ?>

    </div>
</div>

<?php include('footer.php'); ?>




