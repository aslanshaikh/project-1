<?php
    // header('location:purchase.php');
    session_start();
    // if(!isset($_SESSION['user'])) {
    //   header('location:index.php')
    // }
    include('config/db_connect.php');
    $name = $_SESSION['user'];
    $phones = $_POST['phones'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $_POST['total'];
    $billq = "insert into bill(cname, Total) values ('$name', '$total');";
    mysqli_query($con, $billq);
    echo '<h3>Thanks For your purchase '.$name.'</h3>';
    

	$phoneArr = explode(',', $phones);
	array_pop($phoneArr);
	$priceArr = explode(',', $price);
	array_pop($priceArr);
	$quantiyArr = explode(',', $quantity);
	array_pop($quantiyArr);

    $maxIdq = "SELECT MAX(orderid) FROM bill;";
    $result = mysqli_query($con, $maxIdq);
    // echo $result;
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          $res = $row['MAX(orderid)'];
        }
      } else {
        echo "0 results";
      }
    // echo $res;
  // echo "<p>You purchased: <br>Device name      "."Individual Price    "."Quantity</p>";
	// echo `\n`;
    // echo '<h1>Hello Hetererr</h1>';
  echo '<div class="container">
  <div class="col-lg-24">
    <hr>
    <h2 class="text-warning text-center">Order Summary </h2>
    
    <table class="table table-striped table-hover table-bordered">

      <tr class="bg-dark text-white text-center">
        <th>Device name</th>
        <th>Individual Price </th>
        <th>Quantity</th>
      </tr>';

      
      for ($i=0; $i < count($phoneArr); $i++) { 
        # code...
        // echo "\n".$phoneArr[$i]."\t".$priceArr[$i]."\t".$quantiyArr[$i];
        echo '<tr class="text-center">';
    echo '<td>'.$phoneArr[$i].'</td>';
    echo '<td>'.$priceArr[$i].'</td>';
    echo '<td>'.$quantiyArr[$i].'</td>';
    echo '</tr>';
    // echo "<br>";
    $orderq = "insert into orderdetails(OrderId, PName, Quantity, Price) values ('$res', '$phoneArr[$i]', '$quantiyArr[$i]', '$priceArr[$i]');";
    mysqli_query($con, $orderq);
    
	}
  echo '</table></div>';
  echo '<b>Your total price is '.$total.'</b>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>