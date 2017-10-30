<?php
require_once("soporte.php");

if ($auth->estaLogueado()) {
    true; // si necesito un pre action
}
?>

<?php include "header.php"; ?>

<div class="jumbotron">
  <div class="animated flipInY">
    <h1>Te pedimos disculpas!</h1>
    <p>La funcionalidad solicitada aun no fue desarrollada </p>
    <p><a class="btn btn-primary btn-lg" href="index.php" role="button">Explotar</a></p>
  </div>
</div>

<?php include "footer.php"; ?>