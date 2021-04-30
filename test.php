<?php
require("header.php")
?>
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
                <button type="button">Deconexion</button>
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
    echo("<br>");
    ?>
    </i>
<?php
}
?>
        <div class="btn-group"> 
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Réponse<span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu"> 
            <div class="form-group">
                <form action="test.php" role="form" method="POST">
                <label for="reponse" style="float:left;">reponse</label>
                <input id="reponse" class="form-control" type="text" placeholder="Votre reponse" rows="7" name="reponse"></input>
                <button type="submit" style="text-align: center;" class="btn btn-success">Envoyer</button>
                </form>
            </div>
            </ul>
        </div>
    </div>
    </div>
</div>
<?php
if (isset($_POST["reponse"])){
    var_dump($_POST);
    $reponse = $_POST['reponse'];
    $idUtilisateur=$_SESSION["idUtilisateur"];
    $date = date("Y-m-d");
    $query = $co->prepare("INSERT INTO `reponse`(`user_idReponse`, `dateReponse`, `rep_questReponse`) 
    VALUES (:user_idReponse,:dateReponse,:rep_questReponse)");
    
    $query->bindParam(':user_idReponse', $idUtilisateur);
    $query->bindParam(':dateReponse', $date);
    $query->bindParam(':rep_questReponse', $reponse);
    $query->execute();
}
try {
  // prepare sql and bind parameters
    $reponse = $_POST['reponse'];
    $idUtilisateur=$_SESSION["idUtilisateur"];
    $date = date("Y-m-d");
  $stmt = $conn->prepare("INSERT INTO `reponse`(`user_idReponse`, `dateReponse`, `rep_questReponse`) 
  VALUES (:user_idReponse,:dateReponse,:rep_questReponse)");
  $stmt->bindParam(':user_idReponse', $idUtilisateur);
  $stmt->bindParam(':dateReponse', $date);
  $stmt->bindParam(':emarep_questReponseil', $reponse);

  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
$questions->closeCursor();
?>
</body>
</html>