<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Admin...</title>
</head>
<body>
    
<form action="login.php" method="post">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Administrator</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

          

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
<!-- bootstrap js  -->
<script src="../js/bootstrap.min.js">
</body>
</html>

<?php
session_start();

// Set database connection parameters
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

// Retrieve user information from database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If user is found, set session variables and redirect to home page
    if ($count == 1) {
        $_SESSION['username'] = $username;
        header("location:index.php");
        $_SESSION["username"] = $username;
        $_SESSION['loginsuccess']=1;
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>


<?php
 if (isset($error)): ?>
    <p><?php echo $error; ?></p>
    <?php endif; ?>
