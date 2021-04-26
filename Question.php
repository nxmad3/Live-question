<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
</head>
<body>
<h2> Les questions </h2>
<?php
require("db.php");
$co = connexionBdd();
$questions = $co->query("SELECT * FROM question INNER JOIN categorie on question.cat_idQuestion = categorie.idContact");
while ($donnees = $questions->fetch()){
    echo($donnees["titreQuestion"]);
}
$questions->closeCursor();
?>
</body>
</html>