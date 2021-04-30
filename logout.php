<?php
    session_destroy();
    unset($_SESSION['idUtilisateur']);
    unset($_SESSION['pseudoUtilisateur']);
    header('location:index.php');
?>