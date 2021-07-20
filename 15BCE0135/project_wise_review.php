<!DOCTYPE html>
<html>
<head>
<title>REVIEW</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	h1{color:#008080; font-family:arial; text-align:center;}
	span,p{font-size:20px;}
	table, th, td {border: 1px solid;font-size:21px;color:white;}
	body{background-image: url(1.jpg);
	 background-repeat: no-repeat;
  background-attachment: fixed;
    background-position: center;
		background-size: 1536px 1100px;
		}
		.sing {
    width: 17%;
     border-radius: 11px;
    border: #fbfbfb solid 2px;
    cursor: pointer;
    background-color: orange;
    color: white;
    font-size: 24px;
    padding-top: 8px;
    padding-bottom: 8px;
	margin-top: 50px;
    margin-left: 1200px;
    font-weight: 700;
}
</style>

</head>
<body>
	<header>
	<nav>
	<ul class="navi">
		<li class="navi"><a href="home.html" title="Home page">HOME</a></li>
		<li class="navi"><a href="#" title="About page">ABOUT</a></li>
		<li class="navi"><a href="#" title="Contact US">Contact Us</a></li>
		<li class="navi"><a href="#" title="Inpector">INSPECTER LOGIN</a></li>
	
	</ul></nav>
</header>
<body>
<ul class="sidebar">
      <li class="sidebar-brand"><a href="">INSPECTER MENU:</a></li>
      <li><a href="project.html">PROJECTS</a></li>
      <li><a href="review.html">REVIEW</a></li>
      <li><a href="profile.html">MY Profile</a></li>
      <li><a href="progress.html">PROGRESS</a></li>
      <li><a href="home.html">Logout</a></li>
      </ul>
<div id="form-main">
 	 <div id="form-div">
<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "reva";
$conn = new mysqli($servername, $username, $password, $db);
$result= $conn->query("select *from projectreview");
echo "<table><tr><th>PROJECT</th><th>REVIEW</th></tr>";
    while($ro = $result->fetch_assoc()) {
        echo "</td><td>".$ro["project"]."</td><td>".$ro["description"]."</td></tr>";
    }
    echo "</table>";
$conn->close();
?>  
</div>
</div>

</body>
</html>