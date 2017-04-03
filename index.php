<?php require_once('functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Types of Dim Sum?</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1>Types of Dim Sum</h1>
      <h2>Ha-Gow</h2>
      <?php makeDimsum('ha-gow'); ?>
      <h2>Siu-Mai</h2>
      <?php makeDimsum('shu-mai'); ?>

    </main>
  </body>
</html>