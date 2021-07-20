<?php
$description = $_POST["review"];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "reva";
$conn = new mysqli($servername, $username, $password, $db);
$result = $conn->query("select day from dayreview where day=(select max(day) from dayreview)");
while($row = $result->fetch_assoc()){
	$day = $row['day'] + 1;	
}
$conn->query("insert into dayreview values(".$day.",'".$description."')");
$conn->close();
header("location: dummy.html");
?>  