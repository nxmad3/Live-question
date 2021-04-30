<?php
$titre ="acceuil";
require("header.php");
?>
<div class="all">
    <div class="nindo">
        <h1> Les questions </h1>
    </div>
    <div class="card">
        <div class="card-body">
            <?php
            require("./db/db.php");
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