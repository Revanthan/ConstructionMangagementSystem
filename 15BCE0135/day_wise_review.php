<!doctype html>
<html>
<head>
<title>
Dayreview
</title>
<link rel="stylesheet" href="style.css">
<style type="text/css"> 
	body { background-color:cyan;}
	h1{color:#008080; font-family:arial; text-align:center;}
	span,p{font-size:20px;}
	table, th, td {border: 2px solid;font-size:20px;}
	img{transition: all 1s}
	img:hover{transform: rotate(10deg);box-shadow: 0px 0px 4px 6px white}
	button {
    width: 17%;
     border-radius: 11px;
    border: #fbfbfb solid 2px;
    cursor: pointer;
    background-color: orange;
    color: white;
    font-size: 24px;
    padding-top: 8px;
    padding-bottom: 8px;
    margin-top: 236px;
    margin-left: 600px;
    font-weight: 700;
}
 </style>
 <link rel="stylesheet" href="managercss.css">
</head>
<body>
<h1>Review Page</h1>
<div align="center">
<br>
<br>

<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "reva";
$conn = new mysqli($servername, $username, $password, $db);
$result= $conn->query("select a.day,a.description,b.dreview from review a inner join dayreview b on a.day=b.day");
echo "<table><tr><th>Day</th><th>Description</th><th>REVIEW</th></tr>";
    while($ro = $result->fetch_assoc()) {
        echo "</td><td>".$ro["day"]."</td><td>".$ro["description"]."</td><td>".$ro["dreview"]."</td></tr>";
    }
    echo "</table>";
$conn->close();
?>  

</body>
</html>