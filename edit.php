<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
include("auth.php"); 
require('db.php');
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$emai = $_REQUEST['email'];
$password = $_REQUEST['password'];
$Phoneno = $_REQUEST['phoneno'];
$address = $_REQUEST['address'];
$date = $_REQUEST['date'];
$submittedby = $_SESSION["username"];
$update="update new_record set trn_date='".$trn_date."', name='".$name."', email='".$email."',password ='".$password."', phoneno='".$Phoneno."', address='".$address."', date='".$date."', submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter email" required value="<?php echo $row['email'];?>" /></p>
<p><input type="password" name="password" placeholder="Enter password" required value="<?php echo $row['password'];?>" /></p>
<p><input type="number" name="phoneno" placeholder="Enter Phone no" required value="<?php echo $row['phoneno'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter address" required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="date" placeholder="Enter date" required value="<?php echo $row['date'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

</div>
</div>
</body>
</html>