<html>
<boby>
<?php
	$servername = "172.18.0.2";
	$username = "root";
        $password = "root";
        $d b="mysql";
	$port="3306";

	$dbcon = mysqli_connect($servername,$username,$password,$db,$port);
	if(!$dbcon){

die("Connection failed : " . mysqli_connect_error ());

 }
    echo "Connect successfully";

 $sql = "SELECT user ,user_name, FROM mysql. user" ;
     $result = mysqli_query($dbcon , $sql);
     if (mysqli_num_rows($result)> 0){
     while ($data = mysqli_fetch_assoc ($result )) {
     printf ("<br>%s", $data ["user_name" ]);
	}
     }
	else {
     echo "No Data Found";
	}

		mysqli_close ($dbcon );
	?>

     </body>
     </html>
