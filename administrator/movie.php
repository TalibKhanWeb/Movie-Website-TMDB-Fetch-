<?php 
include 'header.php';

 ?>
 <style type="text/css">
 	.card{
 		margin: 10px;
 	}
 </style>
<nav class="navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Movies</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container" >
	<div class="row">

		<?php 
		$query = "SELECT * FROM movie";
		$run = mysqli_query($conn,$query);
		if ($run) {
			while ($row = mysqli_fetch_assoc($run)) {
				?>



		<div class="col-12 col-md-6 col-lg-3">
			<div class="card" style="width: 18rem;">
				  <img src="https://image.tmdb.org/t/p/w200/<?php echo$row['poster_path'] ?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $row['title']; ?>, &nbsp;<?php echo $row['original_language']; ?></h5>
				    <p class="card-text"><b><?php echo $row['release_date']; ?></b> &nbsp;</p>
				    <a href="./movie.php?movie=<?php echo$row['movie_id']; ?>" class="btn btn-primary">View</a>
				    <a href="update.php?movie=<?php echo$row['movie_id']; ?>" class="btn btn-secondary">Update</a>
				    <a href="delete.php?movie=<?php echo$row['movie_id']; ?>" class="btn btn-danger">Delete</a>


				  </div>
				</div>
		</div>
<?php
			}
		}else{
			echo "Something Error in Query";
		}

		 ?>





	</div>
</div>

<?php 

include 'footer.php';

 ?>