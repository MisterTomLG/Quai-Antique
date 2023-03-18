<?php

    @include 'config.php';

    session_start();

    if(!isset($_SESSION['user_name'])){
        header('location:login_form.php');
    }


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver Table</title>
    <!-- custom css -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <!-- btn home -->  
<a href="../login/user_page.php" class="home"><i class="fa-solid fa-house my-menu"></i></a>


<div>
    
</div>
<div class="form-container">
    <form action="" method="post">
    <h3>Réserver</h3>
    
    <?php 

    echo '<input type="text" name="name" value="'.$_SESSION["user_name"].'" required>'

    
    
    ?>
    <input type="email" name="email" placeholder="votre email" required autocomplete="email" >
    <input type="text" name="allergies" required placeholder="vos allergies" autocomplete="allergies">
    <input type="number" name="seats" required placeholder="nombre de personne">
    <input type="date" name="res_date" required >
    <input type="time" name="res_time" value="18:00" step="00:15" required >
    <input type="submit" name="submit" value="Réserver" class="form-btn">

    <?php
  error_reporting(0);
  $conn = mysqli_connect("localhost", "root", "", "ecf");
         
         

        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $seats =  $_REQUEST['seats'];
        $res_date = $_REQUEST['res_date'];
        $res_time = $_REQUEST['res_time'];
        $allergies = $_REQUEST['allergies'];

        $select = " SELECT * FROM user_reservation WHERE email = '$email' && res_date = '$res_date' ";

        $result = mysqli_query($conn, $select); 

    if(mysqli_num_rows($result) > 0){
        echo "<p style='text-align:center; font-weight: bold;'>Vous avez déjà réserver pour ce jour la.</p>";
    } else {
         
        // Insertion dans BD

        $sql = "INSERT INTO user_reservation (name, email, seats, res_date, res_time, allergies) VALUES ('$name',
            '$email','$seats','$res_date','$res_time','$allergies')";
         
        if(mysqli_query($conn, $sql)){
            echo "<p style='text-align:center; font-weight: bold;'>Table réserver pour le ($res_date)</p>";
 
            echo nl2br("<p style='text-align:center; font-weight:bold;'>\n$name\n $seats\n "
                . "$res_date\n $res_time\n $allergies</p>");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
      } 
        // Fermeture de la Connection 
        mysqli_close($conn);
  ?>
    
    </form>

</div>
    
</body>
</html>