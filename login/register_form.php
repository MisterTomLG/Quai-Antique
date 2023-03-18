<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $allergies = mysqli_real_escape_string($conn, $_POST['allergies']);
    

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select); 

    if(mysqli_num_rows($result) > 0){
        $error[] = 'utilisateur exist déjà';

    } else {
        if($pass != $cpass){
            $error[] = 'mot de passe ne correspond pas!';
        }else{
            $insert = "INSERT INTO user_form(name, email, password, allergies) VALUES('$name','$email','$pass','$allergies')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        };
    };
};


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <!-- custom css -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <!-- btn home -->  
<a href="../index.php" class="home"><i class="fa-solid fa-house my-menu"></i></a>

<div class="form-container">
    <form action="" method="post">
    <h3>enregistrer</h3>
    
    <?php
    if(isset($error)){
        foreach($error as $error){
            echo'<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>

    <input type="text" name="name" required placeholder="votre nom">
    <input type="email" name="email" required placeholder="votre email">
    <input type="password" name="password" required placeholder="votre mot de passe">
    <input type="password" name="cpassword" required placeholder="confirmer mot de passe">
    <input type="text" name="allergies" required placeholder="vos allergies">
    <input type="submit" name="submit" value="register now" class="form-btn">
    <p>Vous avez déjà un compte? <a href="login_form.php">connexion</a></p>
    </form>

</div>
    
</body>
</html>