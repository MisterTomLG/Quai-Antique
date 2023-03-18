 <!-- Footer -->
 <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <div class="footer__logo">
            <img src="./images/logo.png" alt="quai antique">
          </div>
          <p class="footer__desc">
          Le meilleur repas qui vous sera jamais servi en Europe. <br> Assurez-vous de nous partager avec vos amis !
          </p>
          <div class="footer__socials">
            <h4 class="footer__socials__title">Réseaux Sociaux</h4>
            <ol class="footer__socials__list">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-instagram">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-twitter">
                    <path
                      d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                  </svg>
                </a>
              </li>
            </ol>
          </div>
        </div>
        <div class="footer__col2">
          <h3 class="footer__text__title">
            Liens
          </h3>
          <ol class="footer__text">
            <li>
              <a href="/index.php">Home</a>
            </li>
            <li>
              <a href="./menu.php">Carte</a>
            </li>
            <li>
              <a href="./booking.php">Réservation</a>
            </li>
            <li>
              <a href="./about.php">A Propos</a>
            </li>
          </ol>
        </div>
        <div class="footer__col4">
          <h3 class="footer__text__title">
            Contact
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">+0123456789</a>
            </li>
            <li>
              <a href="#">quai.antique@savoie.com</a>
            </li>
            <li>
              <a href="#">Savoie, Chambéry</a>
            </li>
          </ol>
        </div>
    <div class="footer__col5">
    <?php 
        $conn = mysqli_connect("localhost", "root", "", "ecf");
        $sql = " SELECT title, day, hour_start, hour_end from open_hours WHERE id IN(1) ";
        $result = $conn->query($sql);

        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<h3 class='footer__text__title'>". $row["title"] ."</h3>"
                ."<ol class='footer__text'><li><p>".$row["day"]. " : " .$row["hour_start"]. " - " .$row["hour_end"]. "</p></li></ol>";
            }
        }
    ?>
    <?php
        $sql = " SELECT day, hour_start, hour_end from open_hours WHERE id IN(2, 3, 4, 5, 6, 7) ";
        $result = $conn->query($sql);
    
        if($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<ol class='footer__text'><li><p>".$row["day"]. " : " .$row["hour_start"]. " - " .$row["hour_end"]. "</p></li></ol>";
            }
        }
    ?>
        </div>
      </div>
    </div>
  </footer>
  <div id="copyright">
    <div class="container">
      <p class="copyright__text">
        © copyright 2023 Quai Antique | All rights reserved
      </p>
    </div>
  </div>
  <!-- Fin Footer -->