<?php
require("header.php");
?>
<?php

require("function.php");
?>
<form action="question.php" method="POST">
    <div class="mb-3">
        <label for="titreQuestion" class="form-label">titre question</label>
        <input type="text" class="form-control" id="titreQuestion" name="titreQuestion">
    </div>
    <div class="mb-3">
        <label for="sujetQuestion" class="form-label">sujet</label>
        <input type="text" class="form-control" id="sujetQuestion" name="sujetQuestion">
    </div>
    <?php echo(categorie())?>
    <button type="submit" class="btn btn-primary" name="question">envoyer</button>
</form>
<?php
if (isset($_POST['question'])) {
    question();
}
var_dump($_POST);
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