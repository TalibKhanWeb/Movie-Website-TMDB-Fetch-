<?php 

include 'header.php';
include 'db.php';
 ?>

<?php 
if (isset($_GET['movie'])) {
	$movie_id = $_GET['movie'];
	
}
else{
	header('location:movie.php');
}

 ?>

 <?php 
include 'footer.php';

  ?>