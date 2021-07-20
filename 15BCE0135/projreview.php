<?php
$description = $_POST["message"];

$project = $_POST["select_option"];

$servername = "";
$username = "root";
$password = "";
$db = "reva";
$conn = new mysqli($servername, $username, $password, $db);

$conn->query("insert into projectreview values('".$project."','".$description."')");
$conn->close();
header("location: dummy.html");
?>  


<?php
$resul = $conn->query("select * from review and dayreview");
echo "<table><tr><th>Day</th><th>Description</th>REVIEW<th></tr>";
    while($ro = $resul->fetch_assoc()) {
        echo "</td><td>".$ro["day"]."</td><td>".$ro["description"]."</td><td>".$ro["review"]."</td></tr>";
    }
    echo "</table>";
$conn->close();
 ?>