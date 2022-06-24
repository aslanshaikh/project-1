<?php
    // header('location:purchase.php');
    echo '<h1>Thanks For your purchase</h1>';
    include('config/db_connect.php');
    $phones = $_POST['phones'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $_POST['total'];
    $billq = "insert into bill(CustomerName, Address, Phone, Total) values ('$name', '$address', '$phoneNumber', '$total');";
    mysqli_query($con, $billq);
    

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
    echo $res;
  echo "<p>You purchased: <br>Device name      "."Individual Price    "."Quantity</p>";
	echo `\n`;
  for ($i=0; $i < count($phoneArr); $i++) { 
		# code...
		echo "\n".$phoneArr[$i]."\t".$priceArr[$i]."\t".$quantiyArr[$i];
    $orderq = "<p><br>insert into orderdetails(OrderId, PName, Quantity, Price) values ('$res', '$phoneArr[$i]', '$quantiyArr[$i]', '$priceArr[$i]');</p>";
    mysqli_query($con, $orderq);

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>