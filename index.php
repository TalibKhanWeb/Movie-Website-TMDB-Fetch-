<?php 
include './administrator/db.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cross Cinema - All HD+ Movies collections</title>

  <!-- 
    - favicon
  -->
  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="./index.php" class="logo">
        <img src="./assets/images/logo.png" style="height: 100px;" alt="Cross Cinema logo">
      </a>

      <div class="header-actions">

        <a href="search.php" class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </a>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="en">EN</option>
            <option value="au">AU</option>
            <option value="ar">AR</option>
            <option value="tu">TU</option>
          </select>
        </div>

        <button class="btn btn-primary">Sign in</button>

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.php" class="logo">
            <img src="./assets/images/logo.png" alt="CrossCinemae logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

       
            <li>
              <a href="./index.php" class="footer-link">Home</a>
            </li>

            <li>
              <a href="movie.php" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="tv.php" class="footer-link">TV Show</a>
            </li>

           

            <li>
              <a href="request.php" class="footer-link">Request</a>
            </li>
        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Cross Cinema</p>

            <h1 class="h1 hero-title">
              Unlimited <strong>Movie</strong>, TVs Shows, & More.
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill">PG 18</div>

                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <a href="#">Romance,</a>

                <a href="#">Drama</a>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2022">2022</time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT128M">128 min</time>
                </div>

              </div>

            </div>

            <a class="btn btn-primary" href="#movies">
              <ion-icon name="play"></ion-icon>

              <span>Watch now</span>
            </a>

          </div>

        </div>
      </section>





      <!-- 
        - #UPCOMING
      -->

      <section class="upcoming" id="movies">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle">Online Streaming</p>

              <h2 class="h2 section-title">Latest Movies</h2>
            </div>

            <ul class="filter-list">

              <li>
                <button disabled="disabled" class="filter-btn">Movies</button>
              </li>

              <li>
                <button disabled="disabled" class="filter-btn">TV Shows</button>
              </li>

              <li>
                <button disabled="disabled" class="filter-btn">Anime</button>
              </li>

            </ul>

          </div>

          <ul class="movies-list  has-scrollbar">
  <?php 

              $query = "SELECT * FROM movie";
              $run = mysqli_query($conn,$query);
              if ($run) {
                while ($row = mysqli_fetch_assoc($run)) {
                  

                  ?>
            <li>
            

              <div class="movie-card">

                <a href="movie-details.php?id=<?php echo$row['movie_id']; ?>">
                  <figure class="card-banner">
                    <img src="https://image.tmdb.org/t/p/w200/<?php echo$row['poster_path'] ?>" alt="<?php echo$row['title'] ?>movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="movie-details.php?id=<?php echo$row['movie_id']; ?>">
                    <h3 class="card-title"><?php echo $row['title']; ?></h3>
                  </a>

                  <time datetime="2022"><?php echo $row['release_date']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M"><?php echo $row['popularity']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $row['vote_averag']; ?></data>
                  </div>
                </div>

              </div>
            </li> <?php
                }
              }
               ?>
          </ul>


          </ul>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

     





      <!-- 
        - #TOP RATED
      -->

      <section class="top-rated">
        <div class="container">

          <p class="section-subtitle">Online Streaming</p>

          <h2 class="h2 section-title">Top Rated Movies</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn" disabled="disabled" onclick="movie()">Movies</button>
            </li>
<script type="text/javascript">
  
</script>
            <li>
              <button class="filter-btn" disabled="disabled" onclick="tv()">TV Shows</button>
            </li>

          </ul>

          <ul class="movies-list"> 

                      <?php 

              $queryt = "SELECT * FROM movie";
              $runt = mysqli_query($conn,$queryt);
              if ($runt) {
                while ($rowt = mysqli_fetch_assoc($runt)) {
                  

                  ?>  

  

            <li >

              <div class="movie-card">

                <a href="movie-details.php?id=<?php echo$rowt['movie_id']; ?>">
                  <figure class="card-banner">
                    <img src="https://image.tmdb.org/t/p/w200/<?php echo$rowt['poster_path'] ?>" alt="<?php echo$rowt['title'] ?>movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="movie-details.php?id=<?php echo$rowt['movie_id']; ?>">
                    <h3 class="card-title"><?php echo $rowt['title']; ?></h3>
                  </a>

                  <time datetime="2022"><?php echo $rowt['release_date']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M"><?php echo $rowt['popularity']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $rowt['vote_averag']; ?></data>
                  </div>
                </div>

              </div>
            </li>




<?php
     
    }
  }

   ?>

   <!-- ---------------- -->
  <?php 
  $abc = "SELECT * FROM webseries";
  $def = mysqli_query($conn,$abc);
  if ($def) {
    while ($ghi = mysqli_fetch_assoc($def)) {
      ?>


     

            <li >
             
              <div class="movie-card">

                <a href="web-details.php?id=<?php echo$ghi['movie_id']; ?>">
                  <figure class="card-banner">
                    <img src="https://image.tmdb.org/t/p/w200/<?php echo$ghi['poster_path'] ?>" alt="<?php echo$ghi['title'] ?>movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="web-details.php?id=<?php echo$ghi['movie_id']; ?>">
                    <h3 class="card-title"><?php echo $ghi['title']; ?></h3>
                  </a>

                  <time datetime="2022"><?php echo $ghi['first_air_date']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M"><?php echo $ghi['popularity']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $ghi['vote_averag']; ?></data>
                  </div>
                </div>

              </div>
            </li>





          <?php
     
    }
  }

   ?>


</ul>


        </div>
      </section>





      <!-- 
        - #CTA
      -->


    </article>
  </main>


 <section class="service">
        <div class="container">

          <div class="service-banner">
            <figure>
              <img src="./assets/images/service-banner.jpg" alt="HD 4k resolution! only $3.99">
            </figure>

            <a href="./assets/images/service-banner.jpg" download class="service-btn">
              <span>Prime Member</span>

              <ion-icon name="download-outline"></ion-icon>
            </a>
          </div>

          <div class="service-content">

            <p class="service-subtitle">Our Services</p>

            <h2 class="h2 service-title">Download Your Shows HD+ & 4k Offline.</h2>

            <p class="service-text">
              Download all Show and Movies in HD+ and 4k quality.
              or
              You can also download in 480p Quality as a Free Member
            </p>

            <ul class="service-list">

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="tv"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                    <p class="card-text">
                     Request your movie. You get result via email in 2 Working day
                    </p>
                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="videocam"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Watch Everywhere.</h3>

                    <p class="card-text">
                      Follow on Youtube For Update
                    </p>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="./index.php" class="logo">
            <img src="./assets/images/logo.png" style="height: 100px;" alt="CrossCinemae logo">
          </a>

          <ul class="footer-list">



         
            <li>
              <a href="./index.php" class="footer-link">Home</a>
            </li>

            <li>
              <a href="movie.php" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="tv.php" class="footer-link">TV Show</a>
            </li>

           

            <li>
              <a href="request.php" class="footer-link">Request</a>
            </li>

          </ul>

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">

          <ul class="quicklink-list">

            <li>
              <a href="#" class="quicklink-link">Faq</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Help center</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Terms of use</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Privacy</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">CrossCinema</a>. All Rights Reserved
        </p>

        <img src="./assets/images/footer-bottom-img.png" alt="Online banking companies logo" class="footer-bottom-img">

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>