<style type="text/css"> 
	body { background-color:#000000;}
	h1{color:#008080; font-family:arial; text-align:center;}
	span,p{color:white; font-size:20px;}
	img{transition: all 1s}
	img:hover{transform: rotate(10deg);box-shadow: 0px 0px 4px 6px white}
 </style>
 <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Review</h1>
<div align="center">
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "reva";
$conn = new mysqli($servername, $username, $password, $db);

$result = $conn->query("select day from dayreview where day=(select max(day) from dayreview)");
while($row = $result->fetch_assoc()){
  $day = $row['day'] + 1;	
	echo '<span>Day'.$day.'</span><br><br><img src="pictures/picture'.$day.'".jpg height="150" width="250" />';	
}

$conn->close();
?>
</div>
<br>
<div id="form-main">
  <div id="form-div">
    <form method="POST" action="review.php">
      <p class="movie">
        <input name="review" type="text" class="login-input" placeholder="review" id="name" required/>
      </p>
      <div class="submit">
      <button class="sub" type="submit">submit</button>
      </div>
    </form>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>