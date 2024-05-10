


<?php 
include './administrator/db.php';
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
   <?php 

if ($_GET['id']) {
 $movie_id = $_GET['id']; 

$query = "SELECT * FROM movie WHERE movie_id=$movie_id";
$run = mysqli_query($conn,$query);
if ($run) {
  while ($row=mysqli_fetch_assoc($run)) {
    ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $row['title']; ?></title>

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

<body id="#top">
  <!-- 
    - #HEADER
  -->




  <header class="header" data-header>
        <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="./index.html" class="logo">
        <img src="./assets/images/logo.png" style="height: 100px;" alt="Cross Cinema logo">
      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

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

          <a href="./index.html" class="logo">
            <img src="./assets/images/logo.svg" alt="Filmlane logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="./index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="movie.php" class="navbar-link">Movie</a>
          </li>

          <li>
            <a href="tv.php" class="navbar-link">Tv Show</a>
          </li>

      

          <li>
            <a href="request.php" class="navbar-link">Request movie</a>
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="https://www.youtube.com/@hdmovielinkaio" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/@hdmovielinkaio" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/@hdmovielinkaio" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/@hdmovielinkaio" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/@hdmovielinkaihttps://www.youtube.com/@hdmovielinkaio" class="navbar-social-link">
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
        - #MOVIE DETAIL
      -->

      <section class="movie-detail">
        <div class="container">

          <figure class="movie-detail-banner">

            <img src="https://image.tmdb.org/t/p/w200/<?php echo$row['poster_path'] ?>" alt="<?php echo$row['title'] ?>movie poster">

            <button class="play-btn">
              <ion-icon name="play-circle-outline"></ion-icon>
            </button>

          </figure>

          <div class="movie-detail-content">

            <p class="detail-subtitle"><?php echo $row['production_companies']; ?></p>

            <h1 class="h1 detail-title">
              <?php echo $row['title']; ?> <strong>HD+</strong>
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill">PG 13</div>

                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <a href="#"><?php echo $row['genres']; ?></a>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2021"><?php echo $row['release_date']; ?></time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT115M"><?php echo $row['status']; ?></time>
                </div>

              </div>

            </div>

            <p class="storyline">
             <?php echo $row['overview']; ?>
            </p>

            <br>
            <br>
            <?php 
            $sql = "SELECT * FROM downloadlink where movieid=$movie_id";
            $run1 = mysqli_query($conn,$sql);
            if ($run1) {
              while ($rows = mysqli_fetch_assoc($run1)) {



               ?>

               <a class="btn btn-primary" href="<?php echo$rows['link'] ?>">Download <?php echo $rows['lable']; ?></a>
               <br>
               <?php
              }
            }


             ?>
          </div>

        </div>
      </section>





      <!-- 
        - #TV SERIES
      -->

      <section class="tv-series">
        <div class="container">

          <p class="section-subtitle">Similar Movies</p>

          <h2 class="h2 section-title">Similar Movies</h2>

          <ul class="movies-list">
            <?php 

            $genre = $row['genres'];
            $mysql = "SELECT * FROM movie WHERE genres LIKE '%Action%'";
            $runsql = mysqli_query($conn,$mysql);
            if ($runsql) {
              while ($rowsql=mysqli_fetch_assoc($runsql)) {
               ?>


            <li>
            

              <div class="movie-card">

                <a href="movie-details.php?id=<?php echo$rowsql['movie_id']; ?>">
                  <figure class="card-banner">
                    <img src="https://image.tmdb.org/t/p/w200/<?php echo$rowsql['poster_path'] ?>" alt="<?php echo$rowsql['title'] ?>movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="movie-details.php?id=<?php echo$rowsql['movie_id']; ?>">
                    <h3 class="card-title"><?php echo $rowsql['title']; ?></h3>
                  </a>

                  <time datetime="2022"><?php echo $rowsql['release_date']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M"><?php echo $rowsql['popularity']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $rowsql['vote_averag']; ?></data>
                  </div>
                </div>

              </div>
            </li>

               <?php
              }
            }
             ?>
 <?php
  }
}
}

else{
  header('location:index.php');
}


  ?>

          </ul>

        </div>
      </section>

    </article>
  </main>





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
              <a href="https://www.youtube.com/@hdmovielinkaio" class="quicklink-link">Faq</a>
            </li>

            <li>
              <a href="https://www.youtube.com/@hdmovielinkaio" class="quicklink-link">Help center</a>
            </li>

            <li>
              <a href="https://www.youtube.com/@hdmovielinkaio" class="quicklink-link">Terms of use</a>
            </li>

            <li>
              <a href="https://www.youtube.com/@hdmovielinkaio" class="quicklink-link">Privacy</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="https://www.youtube.com/@hdmovielinkaio" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/@hdmovielinkaio" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/@hdmovielinkaio" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/@hdmovielinkaio" class="social-link">
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
          &copy; 2023 <a href="#">CrossCinema</a>. All Rights Reserved
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