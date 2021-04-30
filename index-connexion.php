<?php
require("header.php");
$titre = "acceuil";
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

            ?>
            <form action="test.php" role="form" method="POST">

                <?php
                while ($donnees = $questions->fetch()) {
                    ?>
                    <div class="list-question">
                        <span class="pseudo"><?php echo $donnees["pseudoUtilisateur"] ?></span>
                        <span class="titreQuestion">Question: <?php echo $donnees["titreQuestion"] ?></span>
                        <span class="nomCategorie">Categorie: <?php echo $donnees["nomCategorie"] ?></span>
                        <span class="sujetQuestion">Sujet: <?php echo $donnees["sujetQuestion"] ?></span>
                        <span class="date_creaQuestion">le: <?php echo $donnees["date_creaQuestion"] ?></span>
                        <br>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Réponse<span
                                        class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <div class="form-group">
                                    <label for="reponse" style="float:left;">reponse</label>
                                    <input type="hidden" name="idQuestion" value="<?php echo $donnees['idQuestion'] ?>">
                                    <input id="reponse" class="form-control" type="text" placeholder="Votre reponse"
                                           rows="7" name="reponse"></input>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <button type="submit" style="text-align: center;" class="btn btn-success">Envoyer</button>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST["reponse"])) {
    try {
        // prepare sql and bind parameters
        $questionId = $_POST['idQuestion'];
        $reponse = $_POST['reponse'];
        $idUtilisateur = $_SESSION["idUtilisateur"];
        $date = date("Y-m-d");
        $stmt = $co->prepare("INSERT INTO `reponse`(`question_idReponse`,`user_idReponse`, `dateReponse`, `rep_questReponse`) VALUES (:question_idReponse ,:user_idReponse,:dateReponse,:rep_questReponse)");
        $stmt->bindParam(':user_idReponse', $idUtilisateur);
        $stmt->bindParam(':question_idReponse', $questionId);
        $stmt->bindParam(':dateReponse', $date);
        $stmt->bindParam(':rep_questReponse', $reponse);

        $stmt->execute();

        echo "New records created successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$conn = null;
$questions->closeCursor();
?>
</body>
</html>
