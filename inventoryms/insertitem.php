<?php
include("dbconnection.php");
if(isset($_POST)&&!empty($_POST)){
$itemid=$_POST['item_id'];
echo "<br>$itemid ";
$itemname=$_POST['item_name'];
echo "<br> $itemname";
$itemprice=$_POST['item_price'];
echo "<br> $itemprice";
$pdate=$_POST['purchase_date'];
echo "<br> $pdate";
$itemquantity=$_POST['quantity'];
echo "<br> $itemquantity";
$itemstatus=$_POST['status'];
echo "<br> $itemstatus";
$spid=$_POST['s_id'];
echo "<br> $spid";
 
$sql="INSERT INTO inventory(item_id, item_name, price, purchase_date ,quantity,status,supplier) values('$itemid','$itemname','$itemprice','$pdate','$itemquantity','$itemstatus','$spid')";
if(mysqli_query($conn1,$sql)){
    echo "<br>INSERTED SUCCESFULLY !!";
    header("location:homepage.php");
    
}
else{
    echo "error ! ";
}
}
?>