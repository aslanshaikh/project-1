<?php
    // echo 'reached php';
$try = false;
if($try) 
    echo '<h1>Username should be unique</h1>';
session_start();
if(isset($_POST['user'])) {
    // echo 'reached submit';
    // header('location:signup.php');
    include('config/db_connect.php');
    $name = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pass = $_POST['password'];

    $q = "select * from customer where name = '$name'";

    $result = mysqli_query($con, $q);

    $num = mysqli_num_rows($result);

    if($num == 1) {
        header('location:signup.php');

    } else{

        $qy = "insert into customer(name, email, phone, address, password) values ('$name', '$email', '$phone', '$address', '$pass')";
        mysqli_query($con, $qy);
        $_SESSION["user"] = $name;
        header('location:index.php');
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration page </title>
    <style>
        h2{
            background-color:aqua;
            display: flex;
            padding: 5px 5px;
        }
      
        
    </style>

</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
   
    
    <div class="container mt-5">
      
        <div class="row">
          

        
            <div class="col-lg-6">
                
                    <h2>Sign-up form</h2>
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Enter name (these will be used as username in future!)</label>
                            <input type="text" name="user" class="form-control" placeholder="Enter username">
                        </div>

                        <div class="form-group">
                            <label>Enter email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label>Enter phone no.</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter phoneno.">
                        </div>

                        <div class="form-group">
                            <label>Enter address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter address">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" name="password" class="form-control" placeholder="Enter password">
                        </div>

                        <button type="submit" class="btn btn-primary">Sign-in</button>
                    </form>
                </div>
         </div>
    </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>

</html>