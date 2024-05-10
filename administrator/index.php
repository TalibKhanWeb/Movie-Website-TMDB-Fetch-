<?php 
include 'header.php';

 ?>
 <style type="text/css">
 	#row div{
 		border:none;	
 	}
 	body{
 		background-color: #cccc;
 	}
 </style>
<div class="container text-center">
	<h1><center>Welcome to Cixo Movie <b> <?php echo strtoupper($_SESSION['username']); ?></b></center></h1>
  <div class="row" id="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Users</h5>
        <p class="card-text"><i class="fa-sharp fa-solid fa-users fa-2xl"></i></p>
        <a href="user.php" class="btn btn-outline-warning bg-dark">View</a>
      </div>
    </div>
  </div>

    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Movies</h5>
        <p class="card-text"><i class="fa-sharp fa-solid fa-video fa-2xl"></i></p>
        <a href="movie.php" class="btn btn-outline-warning bg-dark">View</a>
      </div>
    </div>
  </div>
</div>
<div class="row" id="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tv Shows / Web-Series</h5>
        <p class="card-text"><i class="fa-solid fa-film fa-2xl"></i></p>
        <a href="webseries.php" class="btn btn-outline-warning bg-dark">View</a>
      </div>
    </div>
  </div>

    <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Demand</h5>
        <p class="card-text"><i class="fa-solid fa-ear-listen fa-2xl"></i></p>
        <a href="demand.php" class="btn btn-outline-warning bg-dark">View</a>
      </div>
    </div>
  </div>
</div>
</div>




 <?php 

include 'footer.php';

  ?>