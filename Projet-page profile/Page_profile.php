<?php
    require("header.php");
    require("./db/db.php");
    $co = connexionBdd();
?>
<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="photo.png" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark btn-sm btn-block">Editer le profile</a></div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="insertion" action="Page_Profile.php" method="POST">
<table width="500" border="0" align="center" cellpadding="6" cellspacing="0" bgcolor="">
<tr>
<td><FONT COLOR="">Nouveau mot de passe :<b style="color: #990000;" >*</b></color></td>
<td><input type="password" name="pass" placeholder="Ancien mot de passe"></td></tr>
<tr>
<td><FONT COLOR="">Nouveau pseudo :<b style="color: #990000;">*</b></color></td>
<td><input type="text" name="pseudo" placeholder=<?php echo($donnees["pseudoUtilisateur"])?>></td></tr>
<tr>
<td><FONT COLOR="">Nouveau mail:</color></td>
<td><input type="email" name="email" placeholder="Ancien mail"></td></tr>

      </div></td>
</table>
<div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="confirm" value="1">Save changes</button>
      </div>
             </form>
      </div>
      
    </div>
  </div>
</div>
                    <div class="media-body mb-5 text-white">
                        <h4  class="text-dark"><?php echo $_SESSION["pseudoUtilisateur"] ?></h4><i class="fas fa-map-marker-alt mr-2"></i>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"></h5><small class="text-muted"> <i class="fas fa-image mr-1"></i></small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"></h5><small class="text-muted"> <i class="fas fa-user mr-1"></i></small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"></h5><small class="text-muted"> <i class="fas fa-user mr-1"></i></small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Les questions posées</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <?php
                    $idUtilisateur = $_SESSION['idUtilisateur'];
                    $questions = $co->query("SELECT * FROM question INNER JOIN categorie on question.cat_idQuestion = categorie.idCategorie INNER JOIN utilisateurs on question.auteur_idQustion = utilisateurs.idUtilisateurs WHERE auteur_idQustion=$idUtilisateur");
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
            </div>
            
        </div>
    </div>
    <?php
    var_dump($_SESSION);
    var_dump($_POST);
        if(isset($_POST['confirm'])){
        $pass = $_POST['pass'];
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];

        $requete = $co->query("UPDATE `utilisateurs` SET `pseudoUtilisateur` = '" . $pseudo . "', `emailUtilisateur` = '" . $email . "', `mot_de_passeUtilisateur` = '" . $pass . "' WHERE `idUtilisateurs` =" . $idUtilisateur);
        echo("<meta http-equiv='refresh' content='0.5'>");        
        }
        
    ?>
</div>
</body>
</html>