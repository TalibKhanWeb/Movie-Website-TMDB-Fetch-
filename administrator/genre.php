<?php 
include 'header.php';
include 'db.php';
 ?>
<style type="text/css">
	body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: black;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    --c: goldenrod;
    color: var(--c);
    font-size: 16px;
    border: none;
    border-radius: 0.5em;
    width: 12em;
    height: 3em;
    text-transform: uppercase;
    font-weight: bold;
    font-family: sans-serif;
    letter-spacing: 0.1em;
    text-align: center;
    line-height: 3em;
    position: relative;
    overflow: hidden;
    z-index: 1;
    transition: 0.5s;
    margin: 1em;

}

nav ul li span {
    position: absolute;
    width: 25%;
    height: 100%;
    background-color: var(--c);
    transform: translateY(150%);
    border-radius: 50%;
    left: calc((var(--n) - 1) * 25%);
    transition: 0.5s;
    transition-delay: calc((var(--n) - 1) * 0.1s);
    z-index: -1;
}

nav ul li:hover {
    color: black;
}

nav ul li:hover span {
    transform: translateY(0) scale(2);
}

nav ul li span:nth-child(1) {
    --n: 1;
}

nav ul li span:nth-child(2) {
    --n: 2;
}

nav ul li span:nth-child(3) {
    --n: 3;
}

nav ul li span:nth-child(4) {
    --n: 4;
}

</style>

<!-- <a style="color: #000;" href="genremovie.php?genre=horror">horror</a> -->

<div class="container">
	<center><h2 style="color: #fff;"><b>Genre's</b></h2></center>
	<div class="row">
		<?php

$api_key = '8e2e95c3aa8286b064ed56a7c07ec2d5';
$url = "https://api.themoviedb.org/3/genre/movie/list?api_key={$api_key}";

$response = file_get_contents($url);
$genre_data = json_decode($response, true);


    $genres = $genre_data['genres'];
    foreach ($genres as $genre) {
    	?>
		<div class="col-6 col-md-3 col-xl-3">
			<nav><a href="genremovie.php?genre=<?php echo$genre['name'] ?>">
 				 <ul>
   					 <li>
				      <?php echo $genre['name'] ?>
				      <span></span><span></span><span></span><span></span>
				    </li>
				  </ul></a>
				</nav>
			</div>
<?php
        
    }


?>
		
	</div>
</div>

 <?php 

include 'footer.php';
  ?>