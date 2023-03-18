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
  <link rel="stylesheet" href="css/menu.css">
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
  <!-- Fin Nav -->

  <!-- Retour en haut -->
  
  <a href="#" class="top__btn"> <i class="fa-sharp fa-solid fa-arrow-up"></i> </a>
  <!-- Menu section -->
  
  <main id="menu-section">
    <div class="container">
      <section class="grid menu">
        <section id="storeInfo" data-aos="fade-up">
          <div class="container">
            <div class="menu-title">Menu</div>
            <div class="storeInfo__wrapper">
              <div class="storeInfo__item">

              <?php 
      $conn = mysqli_connect("localhost", "root", "", "ecf");
      $sql = " SELECT category, meal, dessert, drink, price from daily_menu WHERE id IN(1) ";
      $result = $conn->query($sql);

      if($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
              echo "<h3 class='storeInfo__title' style='text-underline-offset: 3px;'>". $row["category"] ."</h3>"
              ."<p class='storeInfo__text'>".$row["meal"]."</p>"
              ."<p class='storeInfo__text'>".$row["dessert"]."</p>"
              ."<p class='storeInfo__text'>".$row["drink"]."</p>"
              ."<p class='storeInfo__text'>".$row["price"]."€</p><br>";

          }
      }
  ?>
              </div>
              <div class="storeInfo__item">
              <?php 
      $sql = " SELECT category, meal, dessert, drink, price from daily_menu WHERE id IN(2) ";
      $result = $conn->query($sql);

      if($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
              echo "<h3 class='storeInfo__title' style='text-underline-offset: 3px;'>". $row["category"] ."</h3>"
              ."<p class='storeInfo__text'>".$row["meal"]."</p>"
              ."<p class='storeInfo__text'>".$row["dessert"]."</p>"
              ."<p class='storeInfo__text'>".$row["drink"]."</p>"
              ."<p class='storeInfo__text'>".$row["price"]."€</p><br>";

          }
      }
  ?>
              </div>
            </div>
          </div>
        </section>

      <div class="menu_sec" style="border: 3px solid black; padding:10px; background: white; border-radius:10px;">
        <h2 style="text-decoration:underline">La Carte QUAI ANTIQUE</h2><br>
        <h2>Déjeuner</h2><br>
  <?php 
      $conn = mysqli_connect("localhost", "root", "", "ecf");
      $sql = " SELECT category, title, description, price from menu WHERE category = 'Déjeuner' ";
      $result = $conn->query($sql);

      if($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
              echo "<h4>". $row["title"] ."</h4>"
              ."<p>".$row["description"]."</p>"
              ."<p>".$row["price"]."€</p><br>";
          }
      }
  ?>
 
        <h2>Dîner</h2><br>

  <?php
        $sql = " SELECT category, title, description, price from menu WHERE category = 'Dîner' ";
        $result = $conn->query($sql);

        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<h4>". $row["title"] ."</h4>"
                ."<p>".$row["description"]."</p>"
                ."<p>".$row["price"]."€</p><br>";
            }
        }
    ?>
        <h2>Dessert</h2><br>

  <?php
        $sql = " SELECT category, title, description, price from menu WHERE category = 'Dessert' ";
        $result = $conn->query($sql);

        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<h4>". $row["title"] ."</h4>"
                ."<p>".$row["description"]."</p>"
                ."<p>".$row["price"]."€</p><br>";
            }
            $conn-> close();
        }
    ?>
        </div>
  </main>

  <!-- Footer -->
  <?php
include('footer.php');
?>
  <!-- FIN Footer -->
  <!-- aos script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom script -->
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>