<?php
if($_POST["name"]==("revanth" || "rishi" || "nithya") && $_POST["password"]==("123456" || "1234567" || "12345678")){
	header("location: dummy.html");
}
else{
	header("location: inspector1.html");
}
?>