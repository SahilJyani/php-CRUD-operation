<?php
include("dbconnection.php");
if(isset($_POST) && !empty($_POST)){
    $id=$_POST['userid'];
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

     echo " <br>ID : $id <br>NAME :$name <br>E-MAIL:$mail <br>MOBILE NO :$mobile <br>PASSWORD :$password";

     $sql_insert="INSERT INTO user(u_id,u_name,e_mail,u_mobile,u_password) values('$id','$name','$mail','$mobile','$password')";
     if(mysqli_query($conn1,$sql_insert)){
        echo "<br>INSERTED SUCCESFULLY !";
     } 
     else{
        echo "error !";
     }
     header("location:home_page.php");
}
?>