<?php
require("function.php");
session_start();
cookieUtilisateur();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link meta="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>connexion</title>
</head>
<body>
<?php

var_dump($_SESSION);
var_dump(verification());

?>
<div class="container" style="margin-top: 9%;">
    <div class="row">
        <div class="col-sm" style="margin-top: 9%;">
            <div class="container-sm border border-secondary">
                <form action="connexion.php" method="POST">
                    <div class="mb-3">
                        <label for="emailInscription" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailInscription" aria-describedby="emailHelp "
                               placeholder="email" name="email"">
                    </div>
                    <div class="mb-3">
                        <label for="mdpInscription" class="form-label">Password</label>
                        <input type="password" class="form-control" id=mdpInscription" placeholder="mot de passe"
                               name="mdp">
                        <?php
                        if (verification() == false && isset($_POST['connexion'])) {
                            ?>
                            <p class="text-danger">email ou mot de passe incorecte</p>
                            <?php
                        }
                        ?>

                    </div>
                    <button type="submit" class="btn btn-primary" value="connexion" name="connexion">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm">
            <div class="container-sm border border-secondary">
                <form action="connexion.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email"
                               placeholder="jean@luc.fr"
                               aria-describedby="emailHelp" name="email">
                        <?php
                        if (verification() == "erreurEmail" && isset($_POST['inscription'])) {
                            ?>
                            <p class="text-danger">cette email existe deja</p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="identifiant" class="form-label">pseudo</label>
                        <input type="text" class="form-control" id="identifiant"
                               placeholder="identifiant" name="identifiant">
                        <?php
                        if (verification() == "erreurPseudo" && isset($_POST['inscription'])) {
                            ?>
                            <p class="text-danger">ce pseudo existe deja</p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="mdp" class="form-label">mot de passe</label>
                        <input type="password" class="form-control" id="mdp"
                               placeholder="mot de passe" name="mdp">
                    </div>
                    <div class="mb-3">
                        <label for="mdpConf" class="form-label">Confirmation mot de passe</label>
                        <input type="password" class="form-control" id="mdpConf"
                               placeholder="mot de passe" name="mdpconf">
                        <?php
                        if (verification() == "erreurMdp" && isset($_POST['inscription'])) {
                            ?>
                            <p class="text-danger">les mots de passe ne correspond pas</p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="genre">
                            <option>selectionner un genre</option>
                            <option value="homme">homme</option>
                            <option value="femme">femme</option>
                            <option value="mdr">mdr</option>
                        </select>
                        <?php
                        if (empty(verification()) && isset($_POST['inscription'])) {
                            ?>
                            <p class="text-success">inscription reussi</p>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" name="inscription" value="inscription">
                            inscription
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_POST['inscription']) && verification() == true) {
    inscription();
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
</body>
</html>