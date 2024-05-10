<?php 
include './administrator/db.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cross Cinema - All HD+ Movies collections</title>

  <!-- 
    - favicon
  -->
  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style type="text/css">
   :root {

  /**
   * colors
   */

  --rich-black-fogra-29: hsl(225, 25%, 9%);
  --rich-black-fogra-39: hsl(170, 21%, 5%);
  --raisin-black: hsl(228, 13%, 15%);
  --eerie-black: hsl(207, 19%, 11%);
  --light-gray: hsl(0, 3%, 80%);
  --gunmetal-1: hsl(229, 15%, 21%);
  --gunmetal-2: hsl(216, 22%, 18%);
  --gainsboro: hsl(0, 7%, 88%);
  --citrine: hsl(57, 97%, 45%);
  --xiketic: hsl(253, 21%, 13%);
  --gray-x: hsl(0, 0%, 74%);
  --white: hsl(0, 100%, 100%);
  --black: hsl(0, 0%, 0%);
  --jet: hsl(0, 0%, 20%);

  /**
   * typography
   */

  --ff-poppins: 'Poppins', sans-serif;

  --fs-1: 36px;
  --fs-2: 32px;
  --fs-3: 30px;
  --fs-4: 24px;
  --fs-5: 20px;
  --fs-6: 18px;
  --fs-7: 16px;
  --fs-8: 15px;
  --fs-9: 14px;
  --fs-10: 13px;
  --fs-11: 12px;
  --fs-12: 11px;

  --fw-500: 500;
  --fw-700: 700;

  /**
   * transition
   */

  --transition-1: 0.15s ease;
  --transition-2: 0.25s ease-in;

  /**
   * spacing
   */

  --section-padding: 100px;

}





/*-----------------------------------*\
 * #RESET
\*-----------------------------------*/

*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

li { list-style: none; }

a { text-decoration: none; }
    .container{
    margin-top:200px;
}
html {
  font-family: var(--ff-poppins);
  scroll-behavior: smooth;
}

body { background: var(--eerie-black); }

.btn:hover{
    color:#fff;
}

.input-text:focus{
       
  
    box-shadow: 0px 0px 0px;
    border-color:#f8c146;
    outline: 0px;
}

.form-control {
    border: 1px solid #f8c146;
}


 
  </style>
</head>

<body>

<div class="container justify-content-center">
    
    <div class="row">

       <div class="col-md-8">
           <form action="#" method="post">
           <div class="input-group mb-3">
  <input type="text" class="form-control input-text" name="search" placeholder="Search Movie & TV Shows" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <input type="submit" name="submit" class="btn btn-outline-warning btn-lg" value="Search">
  </div>
</div>
           
       </div>        
        
    </div>
    </form>
    
</div> 

 </body>
</html>


<?php 

$query = ""

 ?>