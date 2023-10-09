<html>
<body>

<?php
$servername = "172.18.0.1";
$username = "root";
$password = "root";
$db="mysql";
$port="33070";  

$dbcon = mysqli_connect($servername, $username, $password,$db,$port);

if (!$dbcon) {
    die("Connection failed: " .  mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT user `user_name` FROM mysql.user";
$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
    while($data = mysqli_fetch_assoc($result)) {
        printf("<br>%s", $data["user_name"]);
  }
} else {
    echo "0 results";
}

mysqli_close($dbcon);
?>
