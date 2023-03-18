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
  <a href="admin_page.php">Home</a>
  <a class="active" href="res_view.php">Réservations</a>
  <a href="gallery.php">Galerie</a>
  <a href="carte.php">Carte</a>
  <a href="menu.php">Menu</a>
  <a href="hours.php">Horaires</a>
</div>

<h2 style="text-align:center; padding-top:50px;">Réservation</h2>

<table style="border: 1px solid; width: 100%; text-align:center; margin-top: 100px;">
    <tr>
        <th style="border:1px solid #ddd; padding:8px;">Nom</th>
        <th style="border:1px solid #ddd; padding:8px;">Email</th>
        <th style="border:1px solid #ddd; padding:8px;">Places</th>
        <th style="border:1px solid #ddd; padding:8px;">Date</th>
        <th style="border:1px solid #ddd; padding:8px;">Heures</th>
        <th style="border:1px solid #ddd; padding:8px;">Allergies</th>
    </tr>
    <?php 
        $conn = mysqli_connect("localhost", "root", "", "ecf");
        $sql = " SELECT name, email, seats, res_date, res_time, allergies from user_reservation ORDER BY res_date ASC ";
        $result = $conn->query($sql);

        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["seats"] ."</td><td>". $row["res_date"] 
                ."</td><td>". $row["res_time"] ."</td><td>". $row["allergies"] ."</td></tr>";
            }
            echo "</table>";
        }

        $conn-> close();

    ?>
</table>

    
</body>
</html>