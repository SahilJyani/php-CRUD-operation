<?php
include("dbconnection.php");
$item_id=$_GET['i_id'];
$sql_delete="DELETE FROM inventory WHERE item_id='$item_id'";
if(mysqli_query($conn1,$sql_delete)){
    echo " DELETED SUCCESFULLY !!";
    header("location:showitem.php");
}
else{
    echo "error ! ";
}
?>