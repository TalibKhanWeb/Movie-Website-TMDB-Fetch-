<?php

session_start();
if (isset($_SESSION['loginsuccess'])) {
    
    
}
else{
    header("location:login.php");
}
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin -- Cixo Movies</title>
    <style type="text/css">
        body{
            background-color: black;
            color: #fff;
        }
        #nav a{
            text-decoration: none;
            color: #fff
        }
    </style>
</head>
<body>
<div class="container-fluid" id="nav">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0">
                            <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            
                            <li>
                                <a href="request.php" class="nav-link px-0"> <span class="d-block d-sm-inline">Add Product</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="upload.php" class="nav-link px-0 align-middle">
                           <i class="fa-solid fa-upload"></i><span class="ms-1 d-none d-sm-inline">Upload Movies</span></a>
                    </li>
                  
                     <li>
                        <a href="uploadwebseries.php" class="nav-link px-0 align-middle">
                           <i class="fa-solid fa-upload"></i>	 <span class="ms-1 d-none d-sm-inline">Upload Web Series</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                           <i class="fa-solid fa-user"></i> <span class="ms-1 d-none d-sm-inline">Users</span></a>
                       
                    </li>
                    <li class="text-center">
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                           <i class="fa-solid fa-table"></i><span class="ms-1 d-none d-sm-inline">Movie Logs</span> </a>
                            <ul class="collapse nav flex-column ms-1 " id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="genre.php" class="nav-link px-0"> <span class="d-block d-sm-inline">Genre</span> </a>
                            </li>
                            <li class="w-100">
                                <a href="movie.php" class="nav-link px-0"> <span class="d-block d-sm-inline">Movies</span> </a>
                            </li>
                                                        <li class="w-100">
                                <a href="webseries.php" class="nav-link px-0"> <span class="d-block d-sm-inline">Web series</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-block d-sm-inline">By Year</span></a>
                            </li>
                            
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-block d-sm-inline">Search Queries</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fa-solid fa-comment"></i> <span class="ms-1 d-none d-sm-inline">Comment</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                       <a class="dropdown-item" href="logout.php"> <i class="fa-solid fa-right-from-bracket"> &nbsp;Sign out</a></i>
                    
                </div>
            </div>
        </div>
        <div class="col py-3">
           