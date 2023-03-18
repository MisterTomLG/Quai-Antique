<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
       
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:../admin/admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }

    }else{
        $error[] = 'incorrect email or password!';
    }

};
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <!-- custom css -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    
<!-- btn home -->  
<a href="../index.php" class="home"><i class="fa-solid fa-house my-menu"></i></a>

<!-- form de connexion -->
<div class="form-container">
    <form action="" method="post">
    <h3>Connectez-vous</h3>

    <?php
    if(isset($error)){
        foreach($error as $error){
            echo'<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>

    <input type="email" name="email" required placeholder="votre email">
    <input type="password" name="password" required placeholder="votre mot de passe">
    <input type="submit" name="submit" value="Connecter" class="form-btn">
    <p>vous n'avez pas de compte ? <a href="register_form.php">enregistrez-vous</a></p>
    </form>

</div>
    
</body>
</html>