<?php 
include("idbconnection.php");

if(isset($_POST)&&!empty($_POST))
{
$item_id=$_POST['itemid'];
$itemid=$_POST['item_id'];
$itemname=$_POST['item_name'];
$itemprice=$_POST['item_price'];
$pdate=$_POST['purchase_date'];
$itemquantity=$_POST['quantity'];
$itemstatus=$_POST['status'];
$spid=$_POST['s_id'];

$pdate=$_POST['purchase_date'];
$sql_update="UPDATE inventory SET item_id='$itemid' , item_name='$itemname', price='$itemprice', purchase_date='$pdate' ,quantity='$itemquantity',status='$itemstatus',supplier='$spid' WHERE item_id='$item_id'";
if(mysqli_query($conn1,$sql_update)){
    echo "UPDATED SUCCSESFULLY";
    echo"<br>itemid =$itemid";
    echo"<br>item_id =$item_id";
    header("location:showitem.php");

}
else{
    echo "error !";
}
}
?>