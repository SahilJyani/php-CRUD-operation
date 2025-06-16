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
        .headicon{
            font-size:30px;
        }
        .dbicon{
            font-size:35px;
        }
        .inputcolor{
            background-color:#F1F6E7;
        }
        .textcolor{
         color:#2F4F2F;
        }
        .btnbgcolor{
         background-color:#2F4F2F;
        }
        .btnbgcolor:hover{
         background-color:#2F4F2F;
        }
   </style>
</head>
<body>
    <header id="headd">
        <nav class="navbar navbar-expand-md fixed-top bg-white shadow p-0">
            <div class="container-fluid m-0 p-2 ">
                <a class="text-dark text-decoration-none text_gap"><i class="fa-solid fa-shop px-3 headicon"></i>INVENTORY</a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#collapsiblenav">
                    <span class="navbar-toggler-icon  "></span>
                </button>
                <div class="collapse navbar-collapse p-0 m-0" id="collapsiblenav">
                    <ul class="navbar-nav ms-auto me-5 ">
                            <li class="list-unstyled nav-item px-4 py-2"><a class="text-decoration-none text-muted " href="homepage.php"> HOME </a></li>
                            <li class="list-unstyled nav-item px-3 py-2"><a class="text-decoration-none text-muted" href="showitem.php">
                                <i class="fa-solid fa-user px-2"></i> SHOW</a></li>
                            
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="section9 container-fulid pt-5 mt-5" id="contact">
        <div class="text-center"><p class="display-6"><i class="fa-solid fa-database dbicon text-success mx-3"></i> INVENTORY MANAGMENT</p></div>
     <form class=" pb-5 textcolor  " action="insertitem.php" method="POST" autocomplete="on" >
         <div class=" mb-3 mt-3 mx-auto w-75 ">
                <label for="itemid"><i class="fa-solid fa-id-card pe-2"></i>ITEM ID</label>
                <input type="text" class="form-control mt-2 inputcolor" id="itemid" placeholder="Enter id" name="item_id" required>
                
            </div>
             <div class=" mb-3 mt-4 mx-auto w-75 ">
                <label for="itemname"> <i class="fa-solid fa-signature pe-2"></i>ITEM Name</label>
                <input type="text" class="form-control mt-2 inputcolor" id="itemname" placeholder="Enter name" name="item_name">
                
            </div>
            <div class=" mb-3 mt-4 mx-auto w-75 ">
                 <label for="price"><i class="fa-solid fa-hand-holding-dollar pe-2"></i>PRICE</label>
                <input type="number" class="form-control mt-2 inputcolor" id="price" placeholder="Price" name="item_price">
               
            </div>
             <div class=" mb-3 mt-4 mx-auto w-75 ">
                <label for="pdate"><i class="fa-solid fa-calendar-days pe-2"></i>PURCHAGE DATE</label>
                <input type="date" class="form-control mt-2 inputcolor" id="pdate" placeholder="YYYY-MM-DD" name="purchase_date">
                
            </div>
             <div class=" mb-3 mt-4 mx-auto w-75 ">
                  <label for="qun"><i class="fa-solid fa-boxes-stacked pe-2"></i>QUANTITY</label>
                <input type="number" class="form-control mt-2 inputcolor" id="qun" placeholder="Quantity" name="quantity">
              
            </div>
             <div class=" mb-3 mt-4 mx-auto w-75 ">
                  <label for="status"> <i class="fa-solid fa-warehouse pe-2"></i>STATUS</label>
                <input type="text" class="form-control mt-2 inputcolor" id="status" placeholder="In stock / out of stock" name="status">
              
            </div>
             <div class=" mb-3 mt-4 mx-auto w-75 ">
                  <label for="sid"><i class="fa-solid fa-truck-ramp-box pe-2"></i>SUPPLIER ID</label>
                <input type="text" class="form-control mt-2 inputcolor" id="sid" placeholder="Enter supplier id" name="s_id">
              
            </div>
            <div class="text-center mt-4">
                <button class="btn text-white btnbgcolor rounded-3 mx-4 sec9btn " type="submit"><i class="fa-solid fa-bookmark px-2"></i>SUBMIT</button>
            </div>
        </form>
    </section>
        
</body>
</html>