<?php
include("dbconnection.php");
if(isset($_POST)&&!empty($_POST)){
    $userid=$_POST['user_id'];
    $id=$_POST['userid'];
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $mobile=$_POST['mobile'];
    

     echo " <br>ID : $id <br>NAME :$name <br>E-MAIL:$mail <br>MOBILE NO :$mobile <br>";

     $sql_update="UPDATE user set u_id='$id',u_name='$name',e_mail='$mail',u_mobile='$mobile' WHERE u_id='$userid'";
     if(mysqli_query($conn1,$sql_update)){
        echo "<br>UPDATEDED SUCCESFULLY !";
        header("location:showdata.php");
     } 
     else{
        echo "error !";
     }
    
}

?>