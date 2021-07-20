
<?php


$servername = "127.0.0.1";
$username = "root";     
$password = "";
$db = "reva";
$conn = new mysqli($servername, $username, $password, $db);
$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$result = $conn->query("select distinct id from login_details where username='$myusername' and password='$mypassword'");
$row = mysqli_num_rows($result);
if($row =="1"){
         	header("location:dummy.html");
      }
else {
		  	header("location:inspector1.html");
      }

$conn->close();
?>