<?php

    @include '../login/config.php';

    session_start();

    if(!isset($_SESSION['admin_name'])){
        header('location:../login/login_form.php');
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <!-- custom css -->
    <link rel="stylesheet" href="../login/login.css">
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<div class="topnav">
  <a class="active" href="admin_page.php">Home</a>
  <a href="res_view.php">Réservations</a>
  <a href="gallery.php">Galerie</a>
  <a href="carte.php">Carte</a>
  <a href="menu.php">Menu</a>
  <a href="hours.php">Horaires</a>
</div>


<div class="container">
    <div class="content">
        <h1>Bienvenue <span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p>Page Admin</p>
        <a href="../login/login_form.php" class="btn">connexion</a>
        <a href="../login/register_form.php" class="btn">enregistrer</a>
        <a href="../login/logout.php" class="btn">déconnexion</a>
    </div>
</div>

    
</body>
</html>