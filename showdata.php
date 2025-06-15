<?php
include("dbconnection.php");
$sql_select="SELECT u_id ,u_name,e_mail,u_mobile,u_password FROM user";
$result=mysqli_query($conn1,$sql_select);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>USER DATA</title>
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
        *{
            padding:0px;
            margin:0px;

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
       
    </style>
</head>
<body>
        <header id="headd">
        <nav class="navbar navbar-expand-md fixed-top bg-white shadow p-0">
            <div class="container-fluid m-0 ">
                <a class="text-dark text-decoration-none text_gap">INFORMATION</a>
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
    <section class="mt-5">
    <h1 class="textcenter"> User Data </h1>
    <table border=1 class="mt-5 text-center">
        <tr class=" border border-2 border-dark">
            <th class="border border-2 border-dark"> USER ID </th>
            <th class="border border-2 border-dark"> NAME </th>
            <th class="border border-2 border-dark"> MOBILE NO </th>
            <th class="border border-2 border-dark"> MAIL </th>
            <th class="border border-2 border-dark"> EDIT </th>
            <th class="border border-2 border-dark"> DELETE </th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td class="border border-dark"><?php echo $row["u_id"] ;?></td>
                <td class="border border-dark"><?php echo $row["u_name"]; ?></td>
                <td class="border border-dark"><?php echo $row["u_mobile"]; ?></td>
                <td class="border border-dark"><?php echo $row["e_mail"]; ?></td>
                <td class="border border-dark"><a href="editdata.php?id=<?php echo $row["u_id"];?>"> EDIT </a></td>
                <td class="border border-dark"><a href="deletedata.php?id=<?php echo $row["u_id"];?>&password=<?php echo $row["u_password"]?>">DELETE</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </section> 
</body>
</html>