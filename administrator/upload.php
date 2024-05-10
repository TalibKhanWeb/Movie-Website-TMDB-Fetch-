<?php 

include 'header.php';

 ?>


<div class="container mt-5" id="form-box">
	<center><h4>Enter <i>Movie</i> TMDB ID to fetch details</h4></center>
	<br>
<form action="upload.php" method="post">
	

<div class="input-group mb-3">
  <input type="number" name="tmdb" class="form-control" placeholder="TMDB ID" aria-label="TMDB ID" aria-describedby="button-addon2">
  <button class="btn btn-outline-success" type="submit" name="fetch" id="button-addon2">Fetch</button>
</div>
</form>
 <?php 




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$movie_id = $_POST['tmdb'];

$url = "https://api.themoviedb.org/3/movie/".$movie_id."?api_key=8e2e95c3aa8286b064ed56a7c07ec2d5";
if ($response = file_get_contents($url)) {
	if ($movie_info = json_decode($response, true)) {
$title =$movie_info['title'];
$original_language =$movie_info['original_language'];
$overview =$movie_info['overview'];
$production_companies =$movie_info['production_companies'];
$production_countries =$movie_info['production_countries'];
$popularity =$movie_info['popularity'];
$poster_path =$movie_info['poster_path'];
$release_date =$movie_info['release_date'];
$revenue =$movie_info['revenue'];
$runtime =$movie_info['runtime'];
$status =$movie_info['status'];
$tagline =$movie_info['tagline'];
$vote_average =$movie_info['vote_average'];
$budget =$movie_info['budget'];
$adult =$movie_info['adult'];
$genres = $movie_info['genres'];


?>

<form action="validation.php" method="post" id="add_form">
	<div class="container">
		 <?php 
  		    $url = 'https://image.tmdb.org/t/p/w200/'.$poster_path.'';
  		    
  		     $thumbnail = '<center><img src="' . $url . '" ></center>';
  		     echo $thumbnail;
  	 ?>
  	 <br>
  	 <br>

<div class="row mb-3">
  	


  
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" placeholder="Movie Title" name="title" value="<?php echo$title; ?>">
   
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="original_language" placeholder="original_language" value="<?php echo $original_language; ?>">
  </div>
 <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" placeholder="overview" name="overview" value="<?php echo $overview; ?>">
  </div>
 	
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="popularity" placeholder="popularity" value="<?php echo $popularity; ?>">
  </div> <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="poster_path" placeholder="poster_path" value="<?php echo $poster_path; ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="release_date" placeholder="release_date" value="<?php echo $release_date; ?>">
  </div>
<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="revenue" placeholder="revenue" value="<?php echo $revenue; ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="runtime" placeholder="runtime" value="<?php echo $runtime; ?>">
  </div>
  	
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="status" placeholder="status" value="<?php echo $status; ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="tagline" placeholder="tagline" value="<?php echo $tagline; ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="vote_average" placeholder="vote_average" value="<?php echo $vote_average; ?>">
  </div>
<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="budget" placeholder="budget" value="<?php echo $budget; ?>">
  </div>

<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="adult" placeholder="adult" value="<?php if($adult == 1){ echo$adult; }else{echo"False";} ?>">
  </div>
<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="movie_id" placeholder="Movie Id" value="<?php echo $movie_id; ?>">
  </div>
 
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
  		

    <input type="text" class="form-control" name="genres" placeholder="genres" value="<?php foreach ($genres as $genre) {
  $gen = $genre['name'];echo " ".$gen.", "; } ?>">
 </div>

  	 
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
  

    <input type="text" class="form-control" name="production_companies" placeholder="production_companies" value="<?php foreach ($production_companies as $prodcom) {
  $name = $prodcom['name']; echo " ".$name.", ";} ?>"> 
   
  </div> 


  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
  		
    <input type="text" class="form-control" name="production_countries" placeholder="production_countries" value="<?php 
foreach ($production_countries as $prodcou) {
  $procoun = $prodcou['name']; echo " ".$procoun.", "; }?>">
    
  </div>
</div>

<div>
  
</div>

<div class="container" id="downloadlist">
  <div class="row" ><div class="col-md-6 mb-3"><input type="text" name="dloadlink[]" placeholder="Download Link" class="form-control"><input type="text" name="dloadlable[]" placeholder="Label" class="form-control"> </div><div class="col-md-6 mb-3">
    <button class="btn add_link">Add link</button>
   <button class="btn rmv_link">Remove Link</button>
 </div></div>
</div>

  <button type="submit" name="submit" id="add_btn" class="container-fluid btn btn-success">Submit</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



</div>

	</div>
</form>
<?php
}
else{
	echo "<script>alert('No Movie Found');window.location.href='upload.php';</script>";
	
}

}else{
	echo "<script>alert('No Movie Found');window.location.href='upload.php';</script>";
}






}
?>
<script type="text/javascript">
$(document).ready(function(){
  $(".add_link").click(function(e){
    e.preventDefault();
    $("#downloadlist").prepend('<div class="row" ><div class="col-md-6 mb-3"><input type="text" name="dloadlink[]" placeholder="Download Link" class="form-control"><input type="text" name="dloadlable[]" placeholder="Label" class="form-control"> </div><div class="col-md-6 mb-3"> <button class="btn rmv_link">Remove Link</button></div></div>');
  });
  $(document).on('click','.rmv_link', function(e){
    e.preventDefault();
    let row_item = $(this).parent().parent();
    $(row_item).remove();
  });
$("#add_form").submit(function(e){
  // e.preventDefault();
  $("#add_btn").val('Adding...');
  $.ajax({
    url: 'validation.php',
    method: 'post',
    data: $(this).serialize(),
  });
});

});
</script>

<?php
 
 include 'footer.php';
  ?>


