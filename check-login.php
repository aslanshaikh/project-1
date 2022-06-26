<?php
    session_start();
    include('config/db_connect.php');
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $ok = true;
    $messages = array();

    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Username cannot be empty!';
    }

    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Password cannot be empty!';
    }
    if ($ok) {
        $q = "select * from customer where name = '$username' && password = '$password' ";
        $result = mysqli_query($con, $q);
        $num = mysqli_num_rows($result);
        // echo $username;
        if ($num ==  1) {
            $ok = true;
            $_SESSION["user"] = $username;
            // header(location:index.php);
            $messages[] = 'Successful login!';
        } else {
            $ok = false;
            $messages[] = 'Incorrect username/password combination!';
        }
    }

    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );

?>