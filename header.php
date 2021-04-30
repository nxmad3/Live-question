<?php
session_start();
?>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Portfolio v1.4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/39e175f046.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style.css">
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
                    <a class="nav-link" href="index-connexion.php">Accueil<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="question.php">Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Page_profile.php">Profil</a>
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