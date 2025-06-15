
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
        <nav class="navbar navbar-expand-md fixed-top bg-white shadow p-0 mb-5">
            <div class="container-fluid m-0 ">
                <a class="text-dark text-decoration-none text_gap">DELETE DATA</a>
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
    <section class="mt-5 ms-5">
  <?php
include("dbconnection.php");
$user_id1=$_GET['id'];
$user_psw1=$_GET['passwordA'];
if(isset($_POST) && !empty($_POST)){
    $uid=$_POST['userid'];
    //echo "<br>$uid";
    $upsw=$_POST['password'];
  // echo "<br>$upsw";
    $sql_select="SELECT * FROM user WHERE u_id='$user_id1' && u_password ='$user_psw1'";
    $sql_delete="DELETE FROM user WHERE u_id='$user_id1' && u_password='$user_psw1'";
    /* while($row=mysqli_fetch_assoc($result)){
        $fetcheduid=$row['u_id'];
       // echo "<br> $fetcheduid";
        $fetchedupass=$row['u_password'];
       // echo "<br> $fetchedupass";
     }
   */
    $result=mysqli_query($conn1,$sql_select);
     if($row=mysqli_fetch_assoc($result)){
        $fetcheduid=$row['u_id'];
   
        $fetchedupass=$row['u_password'];
       
     
        if(( $fetcheduid==$uid)&&($fetchedupass==$upsw)){
           mysqli_query($conn1,$sql_delete);
           header("location:showdata.php");
         }
         else{
        echo " <br> incorrect id password !!";
        echo "<br>entered id and password are : $uid , $upsw ";
        echo "<br>user_id id and user_psw are : $user_id1 , $user_psw1 ";
    }
        }
    else{
        echo " <br> incorrect id password !!";
        echo "<br>entered id and password are : $uid , $upsw ";
        echo "<br>user_id id and user_psw are : $user_id1 , $user_psw1 ";
    }
}
?>

      </section>
 </body>
</html>
