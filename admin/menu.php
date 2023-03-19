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
        <a class="active" href="menu.php">Menu</a>
        <a href="hours.php">Horaires</a>
    </div>



<div class="gallery_container">

    <h3 style="text-align: center; font-size: 35px;" ><i><b>Menu QUAI ANTIQUE</b></i></h3>

    <form action="menuUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">

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
                <strong>Numéro:</strong>
                <input type="text" name="id" class="form-control" placeholder="id">
            </div>
            <div class="col-md-5">
                <strong>Categorie:</strong>
                <input type="text" name="category" class="form-control" placeholder="categorie">
            </div>
            <div class="col-md-5">
                <strong>Plat:</strong>
                <input type="text" name="meal" class="form-control" placeholder="plat">
            </div>
            <div class="col-md-5">
                <strong>Dessert:</strong>
                <input type="text" name="dessert" class="form-control" placeholder="dessert">
            </div>
            <div class="col-md-5">
                <strong>Boisson:</strong>
                <input type="text" name="drink" class="form-control" placeholder="boisson">
            </div>
            <div class="col-md-5">
                <strong>Prix:</strong>
                <input type="text" name="price" class="form-control" placeholder="prix">
            </div>
            <div class="col-md-2">
                <br />
                <button type="submit" name="save" class="btn btn-success">Télécharger</button>
            </div>
        </div>
    </form>


    <div class="row">
        <div class='list-group gallery' style="width:100%;">
            <?php
            require('../login/config.php');

            $sql = "SELECT * FROM daily_menu";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {

            ?>
                <div class='col-sm-3' style="float: left;">

                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                    
                        <div class='text-center'>
                            <small class='text-muted'>
                                <?php echo $row['category']."<br>"
                                            .$row['meal']."<br>"
                                            .$row['dessert']."<br>"
                                            .$row['drink']."<br>"
                                            .$row['price']."<br>"
                                            .$row['id']."<br>";
            ?></small>


                        </div> 
                    </a>

                    <!-- formulaire pour effacer photo -->
                    <form action="./carteDelete.php" method="POST">
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