
<?php
session_start();

if (isset($_SESSION['loginsuccess'])) {
?>




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
    
<form action="register.php" method="post">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Administrator</h2>
              <p class="text-white-50 mb-5">Welcome to <i> NEW </i>Administrator..</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Submit</button>



          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
<!-- bootstrap js  -->
<!-- <script src="../js/bootstrap.min.js"> -->
</body>
</html>
<?php
}
else{
    header("location:login.php");
}
?>
<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movieproject";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (empty($username) || empty($password)) {
        $error = "Username and password are required";
    } else {
        // Check if username exists
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $error = "Username already taken";
        } else {
            // Insert user into database
            $sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($conn, $sql)) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Error inserting user into database";
            }
        }
    }
}
?>


<?php
 if (isset($error)): ?>
    <p><?php echo $error; ?></p>
    <?php endif; ?>

   