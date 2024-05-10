  <?php 
include 'db.php';
if (isset($_POST['submit'])) {
	$title =$_POST['title'];
$original_language =$_POST['original_language'];
$overview =$_POST['overview'];
$production_companies =$_POST['production_companies'];
$production_countries =$_POST['production_countries'];
$popularity =$_POST['popularity'];
$poster_path =$_POST['poster_path'];
$release_date =$_POST['release_date'];
$revenue =$_POST['revenue'];
$runtime =$_POST['runtime'];
$status =$_POST['status'];
$tagline =$_POST['tagline'];
$vote_average =$_POST['vote_average'];
$budget =$_POST['budget'];
$adult =$_POST['adult'];
$genres = $_POST['genres'];
$movie_id = $_POST['movie_id'];

// movie details

$sql = "UPDATE `movie` SET `title`='$title',`original_language`='$original_language',`overview`='$overview',`production_companies`='$production_companies',`production_countries`='$production_countries',`popularity`='$popularity',`poster_path`='$poster_path',`release_date`='$release_date',`revenue`='$release_date',`runtime`='$runtime',`status`='$status',`tagline`='$tagline',`vote_averag`='$vote_average',`budget`='$budget',`adult`='$adult',`genres`='$genres',`movie_id`='$movie_id' WHERE movie_id = $movie_id";
$runquery = mysqli_query($conn,$sql);
if ($runquery) {
	header('location:movie.php');
}
else{
	echo "<script>alert('Something Went Wrong')</script>";
}

// link
$link = $_POST['dloadlink'];
$lable = $_POST['dloadlable'];
foreach ($_POST['dloadlink'] as $key => $value) {
	foreach ($_POST['dloadlable'] as $key => $lable) {

	$query = "UPDATE `downloadlink` SET `movieid`='$movie_id',`link`='$value',`lable`='$lable' WHERE movieid=$movie_id";
	$run = mysqli_query($conn,$query);
 }

}


}else{
	header('location:upload.php');
}

   ?>