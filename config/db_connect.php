<?php 

	// connect to the database
    $con = mysqli_connect('localhost','root');
	// check connection
	// if(!$con)
	// 	echo 'Connection error: '. mysqli_connect_error();
	// else 
	// 	echo "aaaya re baba";
    mysqli_select_db($con, 'mobile');
    // if ($result = mysqli_query($con, "SELECT DATABASE()")) {
    //     $row = mysqli_fetch_row($result);
    //     echo "Default database is " . $row[0];
    //     mysqli_free_result($result);
    //   }
?>