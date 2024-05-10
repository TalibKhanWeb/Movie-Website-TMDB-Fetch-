<?php 

include 'header.php';

 ?>
<style type="text/css">
	#hero {
  background: url("./assets/images/movie-detail-bg.png") no-repeat;
  background-size: cover;
  background-position: center;
  min-height: 750px;
  height: 100vh;
  max-height: 1000px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding-block: var(--section-padding);
}

@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');

*, *:after, *:before {
	box-sizing: border-box;
}

body {
	font-family: "DM Sans", sans-serif;
	line-height: 1.5;
	background-color: #f1f3fb;
	
}

img {
	max-width: 100%;
	display: block;
}
input {
	appearance: none;
	border-radius: 0;
}

.card {
	margin: 2rem auto;
	display: flex;
	flex-direction: column;
	width: 100%;
	max-width: 425px;
	background-color: #FFF;
	border-radius: 10px;
	box-shadow: 0 10px 20px 0 rgba(#999, .25);
	padding: .75rem;
}

.card-image {
	border-radius: 8px;
	overflow: hidden;
	padding-bottom: 65%;
	background-image: url('./assets/images/service-bg.jpg');
	background-repeat: no-repeat;
	background-size: 150%;
	background-position: 0 5%;
	position: relative;
}

.card-heading {
	position: absolute;
	left: 10%;
	top: 15%;
	right: 10%;
	font-size: 1.75rem;
	font-weight: 700;
	color: #735400;
	line-height: 1.222;
	small {
		display: block;
		font-size: .75em;
		font-weight: 400;
		margin-top: .25em;
	}
}

.card-form {
	padding: 2rem 1rem 0;
}

.input {
	display: flex;
	flex-direction: column-reverse;
	position: relative;
	padding-top: 1.5rem;
	&+.input {
		margin-top: 1.5rem;
	}
}

.input-label {
	color: #8597a3;
	position: absolute;
	top: 1.5rem;
	transition: .25s ease;
}

.input-field {
	border: 0;
	z-index: 1;
	background-color: transparent;
	border-bottom: 2px solid #eee; 
	font: inherit;
	font-size: 1.125rem;
	padding: .25rem 0;
	&:focus, &:valid {
		outline: 0;
		border-bottom-color: #6658d3;
		&+.input-label {
			color: #6658d3;
			transform: translateY(-1.5rem);
		}
	}
}

.action {
	margin-top: 2rem;
}

.action-button {
	font: inherit;
	font-size: 1.25rem;
	padding: 1em;
	width: 100%;
	font-weight: 500;
	background-color: #6658d3;
	border-radius: 6px;
	color: #FFF;
	border: 0;
	&:focus {
		outline: 0;
	}
}

.card-info {
	padding: 1rem 1rem;
	text-align: center;
	font-size: .875rem;
	color: #8597a3;
	a {
		display: block;
		color: #6658d3;
		text-decoration: none;
	}
}






</style>
<section class="hero" id="hero">
<div class="container">
	<!-- code here -->
	<div class="card">
		<div class="card-image">	
			<h2 class="card-heading">
				Request movie
				<small>Insert Movie Name With Director Name</small>
			</h2>
		</div>
		<form action="#" method="post" class="card-form">
			<div class="input">
				<input type="text" name="name" class="input-field" required/>
				<label class="input-label">Full name</label>
			</div>
						<div class="input">
				<input type="text" name="moviename" class="input-field"  required/>
				<label class="input-label">Movie Name</label>
			</div>
						<div class="input">
				<input type="email" name="email" class="input-field" required/>
				<label class="input-label">E-Mail</label>
			</div>
			<div class="action">
				<button class="action-button">Submit</button>
			</div>
		</form>
		
	</div>
</div>

</section>


<?php include 'footer.php'; ?>
<?php 
if ($_POST['email']) {
	$name= $_POST['name'];
$moviename= $_POST['moviename'];
$email= $_POST['email'];

$query = "INSERT INTO `request`( `name`, `moviename`, `email`) VALUES ('$name','$moviename','$email')";
$run = mysqli_query($conn,$query);
if ($run) {
	echo "<script>alert('Request submit successfully');</script>";
}
else{
	echo "<script>alert('Somthing Went Wrong');</script>";

}
}else{
	echo "Enter your correct E-MAIL";
}



 ?>