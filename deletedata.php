<?php
include("dbconnection.php");
if( isset($_GET['id']) && !empty($_GET['id'] )&&isset($_GET['password']) && !empty($_GET['password'] )){
$user_id=$_GET['id'];
$user_password=$_GET['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete DATA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"  />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h6 class="ps-5"> Enter user id and password to confirm the change :</h6>
   <form class="form-floating pb-5" action="deleteredirect.php?id=<?php echo $user_id?> & passwordA=<?php echo $user_password?>" method="POST" >
         <div class="form-floating mb-3 mt-3 mx-4">
                <input type="text" class="form-control" id="userid" placeholder="Enter id" name="userid" required>
                <label for="userid">User ID</label>
            </div>
             <div class="form-floating mb-3 mt-3 mx-4">
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
                <label for="pwd">Password</label>
            </div>
            <div>
                <button class="btn text-white bg-dark rounded-0 mx-4 sec9btn" type="submit">SUBMIT</button>
            </div>
        </form>
</body>
</html>