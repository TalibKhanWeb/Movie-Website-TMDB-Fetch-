<?php

session_start();
if (isset($_SESSION['loginsuccess'])) {
    // $user = $_SESSION['username'];
    // echo $user." welcome";
}
else{
    header("location:login.php");
}
?>

<?php

$api_key = "8e2e95c3aa8286b064ed56a7c07ec2d5";
$movie_id = "640146";
$url = "https://api.themoviedb.org/3/movie/".$movie_id."?api_key=8e2e95c3aa8286b064ed56a7c07ec2d5";
$response = file_get_contents($url);
$movie_info = json_decode($response, true);

$title = $movie_info['title'];
echo $title;

?>
<form action="#">
    <input type="text" name="title" value="<?php echo$title ?>">
</form>
