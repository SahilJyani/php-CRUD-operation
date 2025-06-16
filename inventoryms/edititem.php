<?php 
include("dbconnection.php");
$it_id=$_GET['i_id'];
$sql_select="SELECT * FROM inventory WHERE item_id='$it_id'";
$result=mysqli_query($conn1,$sql_select);
$row=mysqli_fetch_assoc($result);

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
            font-size:27px;
        }
   </style>
</head>
<body>
    <header id="headd">
        <nav class="navbar navbar-expand-md fixed-top bg-white shadow p-0">
            <div class="container-fluid m-0 p-2 ">
                <a class="text-dark text-decoration-none text_gap"><i class="fa-solid fa-pen-to-square headicon px-3"></i>EDIT INVENTORY LIST</a>
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
    <section class="section9 container-fulid pt-5 mt-5 bg-success" id="contact">
     <form class=" pb-5  " action="edititemredirect.php" method="POST" autocomplete="on" >

        <input type="hidden" class="form-control" id="itemid" placeholder="Enter id" name="item_id" value="<?php echo $it_id;?>">
                
         <div class=" mb-3 mt-3 mx-4 ">
                <label for="itemid">ITEM ID</label>
                <input type="text" class="form-control" id="itemid" placeholder="Enter id" name="item_id" value="<?php echo $row ['item_id'];?>">
                
            </div>
             <div class=" mb-3 mt-3 mx-4 ">
                <label for="itemname"> ITEM Name</label>
                <input type="text" class="form-control" id="itemname" placeholder="Enter name" name="item_name" value="<?php echo $row ['item_name'];?>">
                
            </div>
            <div class=" mb-3 mt-3 mx-4 ">
                 <label for="price">PRICE</label>
                <input type="number" class="form-control" id="price" placeholder="Price" name="item_price" value="<?php echo $row ['price'];?>">
               
            </div>
             <div class=" mb-3 mt-3 mx-4 ">
                <label for="pdate">PURCHAGE DATE</label>
                <input type="date" class="form-control" id="pdate" placeholder="YYYY-MM-DD" name="purchase_date" value="<?php echo $row ['purchase_date'];?>">
                
            </div>
             <div class=" mb-3 mt-3 mx-4 ">
                  <label for="qun">QUANTITY</label>
                <input type="number" class="form-control" id="qun" placeholder="Quantity" name="quantity" value="<?php echo $row ['quantity'];?>">
              
            </div>
             <div class=" mb-3 mt-3 mx-4 ">
                  <label for="status">STATUS</label>
                <input type="text" class="form-control" id="status" placeholder="In stock / out of stock" name="status" value="<?php echo $row ['status'];?>">
              
            </div>
             <div class=" mb-3 mt-3 mx-4 ">
                  <label for="sid">SUPPLIER ID</label>
                <input type="text" class="form-control" id="sid" placeholder="Enter supplier id" name="s_id" value="<?php echo $row ['supplier'];?>">
              
            </div>
            <div>
                <button class="btn text-white bg-dark rounded-0 mx-4 sec9btn" type="submit"><i class="fa-regular fa-paper-plane px-2"></i>SUBMIT</button>
            </div>
        </form>
    </section>
        
</body>
</html>