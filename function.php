<?php


require("./db/db.php");
function verification()
{
    $co = connexionBdd();
    $verif = $co->query("SELECT * FROM `utilisateurs` ");
    while ($donnees = $verif->fetch()) {
        if (isset($_POST['inscription'])) {
            if ($_POST['mdp'] != $_POST['mdpconf']) {
                return "erreurMdp";
            }
            if ($donnees['pseudoUtilisateur'] == $_POST['identifiant']) {
                return 'erreurPseudo';
            }
            if ($donnees['emailUtilisateur'] == $_POST['email']) {
                return "erreurEmail";
            }

        }

        if (isset($_POST['connexion'])) {
            if ($donnees['emailUtilisateur'] == $_POST['email'] || $donnees['mot_de_passeUtilisateur'] == $_POST['mdp']) {
                return true;
            }
            else {
                return false;
            }
        }

    }
    $verif->closeCursor();

}

function inscription()
{
    if (isset($_POST['identifiant']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['genre'])) {
        $co = connexionBdd();
        $identifiant = $_POST['identifiant'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $genre = $_POST['genre'];

        $query = $co->prepare("INSERT INTO `utilisateurs`(`pseudoUtilisateur`, `emailUtilisateur`, 
                           `mot_de_passeUtilisateur`, `genreUtilisateur`) VALUES (:identifiant ,:email ,:mdp ,:genre)");

        $query->bindParam(':identifiant', $identifiant);
        $query->bindParam(':email', $email);
        $query->bindParam(':mdp', $mdp);
        $query->bindParam(':genre', $genre);
        $query->execute();
    }

}

function categorie()
{
    $co = connexionBdd();
    $categorie = $co->query("SELECT * FROM `categorie` ");
    ?>
    <select class="form-select" aria-label="Default select example" name="categorie">
        <option selected>Selectionner une categorie</option>
        <?php
        while ($donnees = $categorie->fetch()) {
            ?>
            <option value="<?php echo $donnees['idCategorie']; ?>"><?php echo $donnees['nomCategorie']; ?></option><?php
        }
        $categorie->closeCursor();
        ?>
    </select>
    <?php
}

function question()
{
    if (!empty($_POST['titreQuestion']) && !empty($_POST['sujetQuestion']) && !empty($_POST['categorie']) && $_POST['categorie'] != 'Selectionner une categorie') {
        $co = connexionBdd();
        $titre = $_POST['titreQuestion'];
        $sujet = $_POST['sujetQuestion'];
        $categorie = $_POST['categorie'];
        $auteur = $_SESSION['idUtilisateur'];
        $date = date("Y-m-d");

        $query = $co->prepare("INSERT INTO `question`(`titreQuestion`,`auteur_idQustion`, `cat_idQuestion`, `sujetQuestion`, `date_creaQuestion`) VALUES (:titre,:auteur ,:categorie,:sujet,:dateQuestion)");
        $query->bindParam(':titre', $titre);
        $query->bindParam(':auteur', $auteur);
        $query->bindParam(':sujet', $sujet);
        $query->bindParam(':categorie', $categorie);
        $query->bindParam(':dateQuestion', $date);
        $query->execute();
    }
    else
    {
        return false;
    }
}

function creationSessionUtilisateur(){

    if (isset($_POST['connexion']) && verification() == true) {
        $co = connexionBdd();
        $session = $co->query("SELECT * FROM `utilisateurs`");
        while ($donnees = $session->fetch()) {
            if ($donnees['emailUtilisateur'] == $_POST['email']) {

                $_SESSION['idUtilisateur'] = $donnees['idUtilisateurs'];
                $_SESSION['pseudoUtilisateur'] = $donnees['pseudoUtilisateur'];
            }

        }
        $session->closeCursor();

    }
}

function login()
{
    if (isset($_POST['connexion']) && verification() == true) {
        header('location:index-connexion.php');;
    }
}

?>