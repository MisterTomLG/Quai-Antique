
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Quai Antique</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/globalStyles.css">
  <link rel="stylesheet" href="css/components.css">
  <!-- AOS LIBRARY and FONT AWESOME -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <!-- Nav -->
  <div class="nav">
    <div class="container">
      <div class="nav__wrapper">
        <a href="./index.php" class="logo">
          <img src="./images/logo.png" alt="Quai Antique">
        </a>
        <nav>
          <div class="nav__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-menu">
              <line x1="3" y1="11" x2="21" y2="11" />
              <line x1="3" y1="17" x2="21" y2="17" />
              <line x1="3" y1="23" x2="21" y2="23" />
            </svg>
          </div>
          <div class="nav__bgOverlay"></div>
          <ul class="nav__list">
            <div class="nav__close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </div>
            <div class="nav__list__wrapper">

              <li><a class="nav__link" href="./index.php">Home</a></li>
              <li><a class="nav__link" href="./menu.php">Carte</a></li>
              <li><a class="nav__link" href="./about.php">A Propos</a></li>
              <li><a href="./booking.php" class="btn1 primary-btn">Réserver</a></li>
              <li><a href="login/login_form.php" class="btn1 primary-btn">Login</a></li>
            </div>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Retour au de page -->
  
  <a href="#" class="top__btn"> <i class="fa-sharp fa-solid fa-arrow-up"></i> </a>


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
          
          // Insertion de données
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
          
          
          mysqli_close($conn);
  ?>

  <!-- Réservation -->
  <section id="form" data-aos="fade-up">
    <div class="container">
      <h3 class="form__title">Réserver</h3>
      <div class="form__wrapper">
        <form name="booking" action="" method="POST">
          <div class="form__group">
            <label for="name">Nom</label>
            <input type="text" id="firstName" name="name" required autocomplete="name">
          </div>
          <div class="form__group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required autocomplete="email">
          </div>
          <div class="form__group">
            <label for="guestNumber">Nbrs de Personnes</label>
            <input type="number" id="guestNumber" name="seats" min="1" max="20" required>
          </div>
          
          <div class="form__group">
            <label for="date">Date</label>
            <input type="date" id="date" name="res_date" required>
          </div>
          <div class="form__group">
            <label for="time">Heures</label>
            <input type="time" id="time" name="res_time" value="18:00" step="900" min="18:00" max="23:00" required>
          </div>
          <div class="form__group form__group__full">
            <label for="note">Allergies</label>
            <textarea name="allergies" id="note" rows="4" autocomplete="allergies"></textarea>
          </div>
          <button type="submit" class="btn1" style="cursor:pointer;">Réserver</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php
include('footer.php');
?>
  <!-- Fin Footer -->

  <!-- aos scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom scripts -->
  <script src="js/main.js"></script>
</body>

</html>