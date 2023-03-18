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
  <link rel="stylesheet" href="css/about.css">
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

  <!-- Retour haut de page -->
  
  <a href="#" class="top__btn"> <i class="fa-sharp fa-solid fa-arrow-up"></i> </a>
  <!-- Notre Histoire -->
  <section id="ourStory">
    <div class="container">
      <div class="ourStory__wrapper">

        <div class="ourStory__img">
          <img src="./images/cook1.jpg" class="ourStoryCook" alt="Quai Antique">
        </div>
        <div class="ourStory__info">
          <h3 class="ourStory__title">
            Notre Histoire
          </h3>
          <p class="ourStory__subtitle">
          Ouverture de notre troisième restaurant en Savoie, Chambéry.
          </p>
          <p class="ourStory__text">
          Le chef Arnaud Michant aime les produits et leur qualité offerts par les producteurs et agriculteurs. Il a actuellement 2 restaurants mais aimerait ouvrir
          un nouveau dans la belle région de Savoie. Il se concentre sur la qualité des aliments afin de pouvoir préparer les meilleurs repas possibles pour nos clients.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin de notre histoire -->
  <!-- Nos Buts -->
  <section id="ourGoals">
    <div class="container">
      <div class="ourGoals__info">
        <h3 class="ourGoals__title">
          Nos Buts
        </h3>
        <p class="ourGoals__text">
        Vous pourrez dîner midi et soir dans notre nouvel établissement à Chambéry en Savoie. Vous passerez un moment incroyable et 
        dégusterez plusieurs repas incroyables tout au long de votre soirée. Notre chef et nos cuisiniers sont qualifiés, efficaces et fourniront un excellent service à chaque client qui entre dans notre restaurant pour la meilleure
        expérience possible.
        </p>
      </div>
      <div class="ourGoals__imgs__wrapper">
        <div class="ourGoals__img1">
          <img src="./images/goals1.jpg" alt="kitchen img">
        </div>
        <div class="ourGoals__img2">
          <img src="./images/goals3.jpg" alt="kitchen img">
        </div>
        <div class="ourGoals__img3">
          <img src="./images/goals2.jpg" alt="kitchen img">
        </div>
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