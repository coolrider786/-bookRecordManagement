<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="insert into book (title,price,author) values('$title','$price','$author')" ;
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Insertion</title>
</head>
<body>
<h1>BOOK RECORD MANAGEMENT</h1>
<p><?php
	if($status==1) 
		echo"Record Inserted"; 
	else 
		echo"Insertion Failed" 
	?></p>
do you want to insert more Record <a href="insertForm.php">Click Here</a>	
</body>
</html>