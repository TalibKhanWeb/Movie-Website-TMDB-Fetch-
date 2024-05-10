  <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movieproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


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

$check = "SELECT * FROM movie WHERE movie_id = '$movie_id'";
$result = mysqli_query($conn,$check);
if (mysqli_num_rows($result)>0) {
	echo "<script>alert('Movie already exist!!');window.location.href='upload.php';</script>";
}
else{



$sql = "INSERT INTO `movie`( `title`, `original_language`, `overview`, `production_companies`, `production_countries`, `popularity`, `poster_path`, `release_date`, `revenue`, `runtime`, `status`, `tagline`, `vote_averag`, `budget`, `adult`, `genres`, `movie_id`) VALUES ('$title','$original_language','$overview','$production_companies','$production_countries','$popularity','$poster_path','$release_date','$revenue','$runtime','$status','$tagline','$vote_average','$budget','$adult','$genres','$movie_id')";
$runquery = mysqli_query($conn, $sql);

if (!$runquery) {
    echo "Query error: " . mysqli_error($conn);
} else {
	header('location:movie.php');
   
}
// link

$link = $_POST['dloadlink'];
$lable = $_POST['dloadlable'];
foreach ($_POST['dloadlink'] as $key => $value) {
	foreach ($_POST['dloadlable'] as $key => $lable) {

	$query = "INSERT INTO `downloadlink`( `movieid`, `link`, `lable`) VALUES ('$movie_id','$value', '$lable')";
	$run = mysqli_query($conn,$query);
 }

}


}
}
else{
	header('location:upload.php');
}

   ?>