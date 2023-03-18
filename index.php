
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
  <!-- AOS LIBRARY, FONT AWESOME -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/gallery.css">
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
  <!-- Fin de Nav -->

  <!-- Retour au de page -->
  
  <a href="#" class="top__btn"> <i class="fa-sharp fa-solid fa-arrow-up"></i> </a>

  <!-- Section Hero -->
  <section id="hero">
    <div class="container">
      <div class="hero__wrapper">
        <div class="hero__left">
          <div class="hero__left__wrapper">

            <h1 class="hero__heading">Bienvenue au Quai Antique.</h1>
            <p class="hero__info">
            Nous vous emmènerons dans un voyage culinaire dans la belle région de la Savoie. <br>Cet établissement haut de gamme vous fera goûter des plats que vous n'avez jamais goûtés auparavant.
            </p>
            <div class="button__wrapper">
              <a href="./menu.php" class="btn1 primary-btn">Explorer le Menu</a>
              <a href="./booking.php" class="btn1">Réserver</a>
            </div>
          </div>
        </div>
        <div class="hero__right">
          <div class="hero__imgWrapper">
            <img src="./images/resto.jpg">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin Section Hero -->
  <!-- Section info -->
  <section id="storeInfo" data-aos="fade-up">
    <div class="container">
      <div class="storeInfo__wrapper">
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/address-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            Savoie, Chambéry
          </h3>
          <p class="storeInfo__text">
            Adresse
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/wall-clock-icon.svg" alt="clock icon">
          </div>
          <?php 
        $conn = mysqli_connect("localhost", "root", "", "ecf");
        $sql = " SELECT title, day, hour_start, hour_end from open_hours WHERE id IN(1) ";
        $result = $conn->query($sql);

        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<h3 class='storeInfo__title'>". $row["title"] ."</h3>"
                ."<p class='storeInfo__text'>".$row["day"]. " : " .$row["hour_start"]. " - " .$row["hour_end"]. "</p>";
            }
        }
    ?>
    <?php
        $sql = " SELECT day, hour_start, hour_end from open_hours WHERE id IN(2, 3, 4, 5, 6, 7) ";
        $result = $conn->query($sql);
    
        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<p class='storeInfo__text'>".$row["day"]. " : " .$row["hour_start"]. " - " .$row["hour_end"]. "</p>";
            }
        }
    ?>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/phone-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            +0123456789
          </h3>
          <p class="storeInfo__text">
            Appeler Maintenant
          </p>
        </div>

      </div>
    </div>
  </section>
  <!-- Fin section info -->
  <!-- Section spéciale -->
  <section id="ourSpecials" data-aos="fade-up">
    <div class="container">
      <div class="ourSpecials__wrapper">
        <div class="ourSpecials__left">
          <div class="ourSpecials__item">
            <div class="ourSpecials__item__img">
              <img src="./images/food1.jpg" alt="food img">
            </div>
            <h2 class="ourSpecials__item__title">
              Poke Bowl
            </h2>
            <h3 class="ourSpecials__item__price">
              15€
            </h3>

            <p class="ourSpecials__item__text">
            Ce poke bowl est rempli de légumes frais comme des tomates, des haricots et des betteraves. Aussi servi avec des 
              œufs dure, saumon et riz. Tout cela est fraîchement préparé par notre chef et fixé à un prix abordable mais avec une saveur incroyable
            </p>
          </div>
          <div class="ourSpecials__item">
            <div class="ourSpecials__item__img">
              <img src="./images/food2.jpg" alt="food img">
            </div>
            <h2 class="ourSpecials__item__title">
              Saumon Fumé
            </h2>
            <h3 class="ourSpecials__item__price">
              18€
            </h3>
            <p class="ourSpecials__item__text">
            Saumon fumé fraîchement importé des côtes norvégiennes. Le saumon est servi avec une sauce maison spéciale de notre chef et plusieurs
              tranches de citron.
              La sauce se compose d'épices cajun et de différents types d'herbes de provence pour lui donner un peu plus de saveur
            </p>
          </div>
        </div>
        <div class="ourSpecials__right">
          <h2 class="ourSpecials__title" >
            Plats du Jour
          </h2>
          <p class="ourSpecials__text">
          Tous nos plats sont préparés quotidiennement dans nos restaurants pour garantir des repas frais de la plus haute qualité.
            servie à nos clients
          </p>
          <a href="./booking.php" class="btn1">Réserver</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin section spéciale -->

  <!-- Pourquoi nous Section -->
  <section id="whyUs">
    <div class="container">
      <div class="whyUs__wrapper">
        <div class="whyUs__left" data-aos="fade-right">
          <h2 class="whyUs__title">
            Pourquoi Nous
          </h2>
          <p class="whyUs__text">
          La qualité du service, la nourriture, l'ambiance et la valeur de l'argent sont les principaux éléments pour choisir un restaurant.
          Quai Antique est l'un des restaurants gastronomiques les plus exquis de la région de la Savoie avec ambiance parfaite et nourriture délicieuse.
          </p>
        </div>
        <div class="whyUs__right" data-aos="fade-left">
          <div class="whyUs__items__wrapper">
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon1.svg" alt="quality Food">
              </div>
              <p class="whyUs__item__text">Nourriture de Qualité</p>
            </div>
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon2.svg" alt="Skilled chef">
              </div>
              <p class="whyUs__item__text">Chef Etoilé</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin Pourquoi nous section -->
  <!-- Section Retour client -->
  <section id="testimonial">
    <div class="testimonials">
      <div class="inner">
        <h2 class="test__title">Avis</h2>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial"></div>    
              <div class="name">Elena Marquez</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p class="test__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores officiis officia eius corrupti ab necessitatibus beatae dignissimos, 
                expedita laborum sequi earum distinctio voluptatibus quae magnam cumque quod, ut sed est!
              </p>
          </div>
          <div class="col">
            <div class="testimonial"></div>          
              <div class="name">Sam Smith</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="test__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores officiis officia eius corrupti ab necessitatibus beatae dignissimos, 
                expedita laborum sequi earum distinctio voluptatibus quae magnam cumque quod, ut sed est!
              </p>
          </div>
          <div class="col">
            <div class="testimonial"></div>
              <div class="name">James Bond</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p class="test__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores officiis officia eius corrupti ab necessitatibus beatae dignissimos, 
                expedita laborum sequi earum distinctio voluptatibus quae magnam cumque quod, ut sed est!
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin section retour client -->
  <!-- Section galerie -->
  <div class="container-all">
  <h2 style="text-align:center; font-size:25px;">Galerie</h2>
  <?php
    $files = glob("uploads/*.*");
    for ($i=0; $i<count($files); $i++)
    {
      $num = $files[$i];
      echo '<div class="container-single"><img src="'.$num.'" alt="image"></div>'."&nbsp;&nbsp;" ;
      }
  ?>

  </div>

  <!-- Bouton de réservation -->

  <div style="margin:auto;">
    <p style="text-align:center;">Réserver une Table <br><a href="./booking.php" class="btn1">Réserver</a></p>
  </div>


  <!-- Footer -->
  <?php
include('footer.php');
?>
  <!-- End Footer -->

  <!-- aos script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom script -->
  <script src="js/main.js"></script>
</body>

</html>