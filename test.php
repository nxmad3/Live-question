<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Portfolio v1.4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/39e175f046.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style/Style.css">
    <script type="text/javascript" src="script/indexJS.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#Acceuil">Accueil<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#questions">Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Profil">Profil</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <div class="btn-droite">
                <button type="button">Deconexion</button>
                </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="all">
    <div class="nindo">
        <h1> Les questions </h1>
    </div>
    <div class="card">
        <div class="card-body">
            <?php
            require("db.php");
            $co = connexionBdd();
            $questions = $co->query("SELECT * FROM question INNER JOIN categorie on question.cat_idQuestion = categorie.idCategorie INNER JOIN utilisateurs on question.auteur_idQustion = utilisateurs.idUtilisateurs");
            while ($donnees = $questions->fetch()){
            ?>
<?php
    ?>
    <strong>
    <?php
    echo($donnees["pseudoUtilisateur"]);
    ?>
    </strong>
<?php
    echo("&nbsp Question: ");
    echo($donnees["titreQuestion"]);
    echo("<br> Categorie: ");
    echo($donnees["nomCategorie"]);
    echo("<br> Sujet: ");
    echo($donnees["sujetQuestion"]);
    ?>
    <i>
    <?php
    echo("<br> le: ");
    echo($donnees["date_creaQuestion"]);
    ?>
    </i>
  </div>
</div>
<?php
}
$questions->closeCursor();
?>
</div>
</body>
</html>