<?php 

include 'header.php';

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

$sql="SELECT * FROM webseries WHERE movie_id = $movie_id";
$run = mysqli_query($conn,$sql);
if ($run) {
  while ($row=mysqli_fetch_assoc($run)) {
    $poster_path = $row['poster_path'];

    ?>



<form action="validationupdateweb.php" method="post" id="add_form">
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
    <input type="text" class="form-control" placeholder="Movie Title" name="title" value="<?php echo$row['title']; ?>">
   
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="original_language" placeholder="original_language" value="<?php echo $row['original_language']; ?>">
  </div>
 <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" placeholder="overview" name="overview" value="<?php echo $row['overview']; ?>">
  </div>
  
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="popularity" placeholder="popularity" value="<?php echo $row['popularity']; ?>">
  </div> <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="poster_path" placeholder="poster_path" value="<?php echo $row['poster_path']; ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="release_date" placeholder="release_date" value="<?php echo $row['first_air_date']; ?>">
  </div>
<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="revenue" placeholder="Number of Episode" value="<?php echo $row['number_of_episode']; ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="runtime" placeholder="Number of Season" value="<?php echo $row['number_of_season']; ?>">
  </div>
    
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="status" placeholder="status" value="<?php echo $row['status']; ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="tagline" placeholder="seasons" value="<?php echo$row['season'] ?>">
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="vote_average" placeholder="vote_average" value="<?php echo $row['vote_averag']; ?>">
  </div>
<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="budget" placeholder="type" value="<?php echo $row['type']; ?>">
  </div>

<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="adult" placeholder="adult" value="<?php echo $row['adult'] ?>">
  </div>
<div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
    <input type="text" class="form-control" name="movie_id" placeholder="Movie Id" value="<?php echo $movie_id; ?>">
  </div>
 
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
      

    <input type="text" class="form-control" name="genres" placeholder="genres" value="<?php echo$row['genres'] ?>">
 </div>

     
  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
  

    <input type="text" class="form-control" name="production_companies" placeholder="production_companies" value="<?php echo $row['production_companies'] ?>"> 
   
  </div> 


  <div class="col-12 col-sm-6 col-md-3 col-xl-2 mb-3">
      
    <input type="text" class="form-control" name="production_countries" placeholder="production_countries" value="<?php echo $row['production_companies']?> ">
    
  </div>
</div>

<div>
  
</div>

<!-- ---download link--- -->
<?php 

$query = "SELECT * FROM downloadlink WHERE movieid = $movie_id";
$ru = mysqli_query($conn,$query);
if ($ru) {
  while ($ro = mysqli_fetch_assoc($ru)) {
    ?>

<div class="container" id="downloadlist">
  <div class="row" >
    <div class="col-md-6 mb-3">
      <input type="text" name="dloadlink[]" value="<?php echo$ro['link'] ?>" placeholder="Download Link" class="form-control"> 
    </div>
        <div class="col-md-6 mb-3">
      <button class="btn btn-secondary add_link">Add Link</button>
    </div>
  </div>
</div>
<?php
  }
}else{
  echo "NO Download Link";
}

 ?>
<!-- /download link---- -->


  <button type="submit" name="submit" id="add_btn" class="container-fluid btn btn-success">Submit</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



</div>

  </div>
</form>

<script type="text/javascript">
$(document).ready(function(){
  $(".add_link").click(function(e){
    e.preventDefault();
    $("#downloadlist").prepend('<div class="row" ><div class="col-md-6 mb-3"><input type="text" name="dloadlink[]" placeholder="Download Link" class="form-control"><br><input type="text" name="dloadlable[]" placeholder="Label" class="form-control"> </div><div class="col-md-6 mb-3"> <button class="btn btn-danger rmv_link">Remove Link</button></div></div>');
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
    url: 'validationupdateweb.php',
    method: 'post',
    data: $(this).serialize(),
  });
});

});
</script>

<?php
  }
}else{
  header('location:movie.php');
}

 ?>

<?php
 
 include 'footer.php';
  ?>


