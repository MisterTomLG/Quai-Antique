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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>
<body>

    <div class="topnav">
        <a href="admin_page.php">Home</a>
        <a href="res_view.php">Réservations</a>
        <a href="gallery.php">Galerie</a>
        <a href="carte.php">Carte</a>
        <a href="menu.php">Menu</a>
        <a class="active" href="hours.php">Horaires</a>
    </div>



<div class="gallery_container">

    <h3 style="text-align: center; font-size: 35px;" ><i><b>Horaires QUAI ANTIQUE</b></i></h3>

    <form action="carteUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">

        <!-- code d'erreur -->
        <?php if (!empty($_SESSION['error'])) { ?>
            <div class="alert alert-danger">
                <strong>oops!</strong> Il y a eu un problème<br><br>
                <ul>
                    <li><?php echo $_SESSION['error']; ?></li>
                </ul>
            </div>
        <?php unset($_SESSION['error']);
        } ?>

        <!-- code de succès  -->
        <?php if (!empty($_SESSION['success'])) { ?>
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo $_SESSION['success']; ?></strong>
            </div>
        <?php unset($_SESSION['success']);
        } ?>

        <div class="row">
            <div class="col-md-5">
                <strong>Titre:</strong>
                <input type="text" name="title" class="form-control" placeholder="titre">
            </div>
            <div class="col-md-5">
                <strong>Jour:</strong>
                <input type="text" name="day" class="form-control" placeholder="jour">
            </div>
            <div class="col-md-5">
                <strong>Heure Début:</strong>
                <input type="text" name="hour_start" class="form-control" placeholder="heure début">
            </div>
            <div class="col-md-5">
                <strong>Heure Fin:</strong>
                <input type="text" name="hour_end" class="form-control" placeholder="heure fin">
            </div>
            <div class="col-md-2">
                <br />
                <button type="submit" class="btn btn-success">Télécharger</button>
            </div>
        </div>
    </form>


    <div class="row">
        <div class='list-group gallery' style="width:100%;">
            <?php
            require('../login/config.php');

            $sql = "SELECT * FROM open_hours";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {

            ?>
                <div class='col-sm-3' style="float: left;">

                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                    
                        <div class='text-center'>
                            <small class='text-muted'>
                                <?php echo $row['title']."<br>"
                                            .$row['day']."<br>"
                                            .$row['hour_start']."<br>"
                                            .$row['hour_end']."<br>"
                                            
            ?></small>


                        </div> 
                    </a>

                    <!-- formulaire pour effacer photo -->
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                        <button type="submit" title="delete" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                    </form>

                </div> 
            <?php } ?>

        </div> 
    </div> 
</div> 

    
</body>
</html>