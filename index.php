<?php
session_start();
if (!$_SESSION['id']) {
  header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home - LMS</title>
  <!--  css -->
  <?php include("./includes/css-links.php") ?>

</head>

<body class="bg-light">
  <!-- Navbar -->
  <?php include("./includes/navbar.php") ?>

  <div class="container my-1 p-4">
    <!-- statics -->
    <?php include("./includes/statics.php") ?>

    <!-- leaves -->
    <?php include("./includes/leaves.php") ?>


  </div>

  <!-- js  -->
  <?php include("./includes/js-links.php") ?>

</body>

</html>