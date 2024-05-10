<?php 

include 'header.php';
include 'db.php';
 ?>

<?php 
if (isset($_GET['movie'])) {
	$movie_id = $_GET['movie'];
	$query = "DELETE FROM `webseries` WHERE movie_id = $movie_id";
	$run = mysqli_query($conn,$query);
	if ($run) {
		$q = "DELETE FROM downloadlink where movieid=$movie_id";
		$ru = mysqli_query($conn,$q);
		if ($ru && $run) {
			echo "<script>alert('Movie Deleted'); window.location.href='movie.php';</script>";
		}
		else{
			echo "error";
		}
	}
	
}
else{
	header('location:movie.php');
}

 ?>

 <?php 
include 'footer.php';

  ?>