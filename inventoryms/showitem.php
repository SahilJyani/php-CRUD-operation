<?php
include("dbconnection.php");
$sql_select="SELECT * FROM inventory ";
$result=mysqli_query($conn1,$sql_select);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>ITEM info</title>
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
       .marginbottom{
        margin-bottom:9vh;
       }
        .textcenter{
            text-align:center;
            margin-top:15px;
            color:#0F314A;
            text-decoration:underline;
        }
        table{
            border-collapse:collapse;
            margin:20px 0px 0px 20px;
        }
        th{
            padding:10px;
        }
        td{
            padding:13px;
        }
       #headd{
        height:150px;
        background-color:#C4F1CE;
        
       }
       .bglight{
        background-color:#f2f5f3;
       }
       .editbtn,.deltbtn{
        color:#2C3E50;
       }
       .dbicon{
        font-size:17px;
        padding:17px;
        background-color:#C4F1CE;
       }
    </style>
</head>
<body>
     <header class="marginbottom" >
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
    <section id="headd" class="rounded-top-5 container-sm mb-0 " >
    </section>
    <section class=" container-sm bglight mt-0 pb-5">
    <h1 class="ms-5 pt-5 "><i class="fa-solid fa-database dbicon rounded-circle "></i> Inventory </h1>
    <div class="table-responsive-md">
    <table border=1 class="mt-5 text-center mx-auto container-fluid-sm table">
        <tr class=" border border-2 border-dark">
            <th class="border border-2 border-dark"> ITEM ID </th>
            <th class="border border-2 border-dark"> ITEM NAME </th>
            <th class="border border-2 border-dark"> PRICE </th>
            <th class="border border-2 border-dark"> PURCHASE DATE </th>
            <th class="border border-2 border-dark"> QUANTITY </th>
            <th class="border border-2 border-dark"> STATUS </th>
            <th class="border border-2 border-dark"> SUPPLIER ID </th>
            <th class="border border-2 border-dark"> EDIT </th>
            <th class="border border-2 border-dark"> DELETE </th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td class="border border-dark"><?php echo $row['item_id'] ;?></td>
                <td class="border border-dark"><?php echo $row['item_name']; ?></td>
                <td class="border border-dark"><?php echo $row['price']; ?></td>
                <td class="border border-dark"><?php echo $row['purchase_date']; ?></td>
                <td class="border border-dark"><?php echo $row['quantity']; ?></td>
                <td class="border border-dark"><?php echo $row['status']; ?></td>
                <td class="border border-dark"><?php echo $row['supplier']; ?></td> 
                <td class="border border-dark"><a class="editbtn" href="edititem.php?i_id=<?php echo $row['item_id']?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td class="border border-dark"><a class="deltbtn"  href="deleteitem.php?i_id=<?php echo $row['item_id']?>"><i class="fa-solid fa-delete-left"></i></a></td>
               
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
    </section> 
</body>
</html>