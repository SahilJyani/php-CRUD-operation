<?php
include("dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>home page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"  />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   <link rel="stylesheet" href="style.css" />
   <style>
      *{
            font-family: "Raleway", "sans-serif";
            margin: 0;
            padding: 0;
            font-weight:200;
        }
         .sec9btn{
            font-weight:300;
        }
   </style>
</head>
<body>
    <header id="headd">
        <nav class="navbar navbar-expand-md fixed-top bg-white shadow p-0">
            <div class="container-fluid m-0 ">
                <a class="text-dark text-decoration-none text_gap">HOME PAGE</a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#collapsiblenav">
                    <span class="navbar-toggler-icon  "></span>
                </button>
                <div class="collapse navbar-collapse p-0 m-0" id="collapsiblenav">
                    <ul class="navbar-nav ms-auto me-5 ">
                            <li class="list-unstyled nav-item px-4 py-2"><a class="text-decoration-none text-muted " href="home_page.php"> HOME </a></li>
                            <li class="list-unstyled nav-item px-3 py-2"><a class="text-decoration-none text-muted" href="showdata.php">
                                <i class="fa-solid fa-user px-2"></i> SHOW</a></li>
                            
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="section9 container-fulid pt-5" id="contact">
     <form class="form-floating pb-5" action="insertdata.php" method="POST" autocomplete="on">
         <div class="form-floating mb-3 mt-3 mx-4">
                <input type="text" class="form-control" id="userid" placeholder="Enter id" name="userid" required>
                <label for="userid">User ID</label>
            </div>
             <div class="form-floating mb-3 mt-3 mx-4">
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3 mt-3 mx-4">
                <input type="email" class="form-control" id="mail" placeholder="Enter mail" name="mail">
                <label for="mail">Email</label>
            </div>
             <div class="form-floating mb-3 mt-3 mx-4">
                <input type="tel" class="form-control" id="mobile" placeholder="+91" name="mobile">
                <label for="mobile">Mobile no.</label>
            </div>
             <div class="form-floating mb-3 mt-3 mx-4">
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
                <label for="pwd">Password</label>
            </div>
            <div>
                <button class="btn text-white bg-dark rounded-0 mx-4 sec9btn" type="submit"><i class="fa-regular fa-paper-plane px-2"></i>SUBMIT</button>
            </div>
        </form>
    </section>
        
</body>
</html>