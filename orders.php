<?php
include('config/db_connect.php');
session_start();

if(!isset($_SESSION['user'])) {
    header('location:adminlogin.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="orderstyle.css">
    <title>Previous order</title>
  </head>

<body>
  <!-- <h1>Hello, world!</h1> -->
  <div class="heading text-center text-uppercase">
    Welcome
    <?php echo $_SESSION['user'] ?>
  </div>
  <div class="container">
    <div class="col-lg-24">
      <h2 class="text-warning text-center">Previous Orders </h2>
      
      <table class="table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">
          <th>Order ID</th>
          <th>Date and time of purchase</th>
          <th>Device Name </th>
          <th>Quantity</th>
          <th>PRICE</th>

        </tr>

        <?php
            $q = "select * from bill natural join orderdetails where cname='".$_SESSION['user']."';";

            $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query)){  
         ?>

        <tr class="text-center">
          <td>
            <?php echo $res['OrderID'];  ?>
          </td>
          <td>
            <?php echo $res['Date-time'];  ?>
          </td>
          <td>
            <?php echo $res['PName'];  ?>
          </td>
          <td>
            <?php echo $res['Quantity'];  ?>
          </td>
          <td>
            <?php echo $res['Price'];  ?>
          </td>
        
              
        </tr>
            <?php
                 }
                 ?>
      </table>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>