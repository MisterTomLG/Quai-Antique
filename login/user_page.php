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
    <title>Page Admin</title>
    <!-- custom css -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../admin/style.css">
</head>
<body>

<div class="container">
    <div class="content">
        <h1>Bienvenue <span><?php echo $_SESSION['user_name'] ?></span></h1>

        <a href="user_res.php" class="btn">Réserver</a>

        <a href="logout.php" class="btn">déconnexion</a>
       
        <br><br><h2>Vos Allergies</h2>
        <p>
            <?php 
            $conn = mysqli_connect("localhost", "root", "", "ecf");
            $sql = " SELECT allergies from user_form ";
            $result = $conn->query($sql);
    
            if($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo  $row["allergies"];
                }
            }?>
        </p>
    </div>
</div>


</body>
</html>