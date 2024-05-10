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




      <!-- 
        - #UPCOMING
      -->

      <section class="upcoming" id="movies">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper" style="margin-top: 30px;">
              

              <h2 class="h2 section-title">Latest Movies</h2>
            </div>

            <ul class="filter-list">

             
              <li>
                <button disabled="disabled" class="filter-btn">Movies</button>
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

<?php   include 'footer.php'; ?>