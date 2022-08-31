<?php
   if ($_POST['log']){
    $server_db = "localhost"; 
    $username_db = "root";
    $password_db= "";
    $db = "user_db"; // database name 
    $conn = mysqli_connect($server_db, $username_db, $password_db, $db);
    $name = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $sql_find_user = "SELECT * FROM user_db WHERE username='$name' AND password='$pass'";
    $query_db = mysqli_query($conn, $sql_find_user);
    $get_user = mysqli_fetch_assoc($query_db);
    if ($get_user){
       // do sweet-alert jobs success
       $plantext = base64_encode($get_user);
       $iv_length = openssl_cipher_iv_length($ciphering);
       $options = 0;
       $encryption_iv = '1234567891011121';
       $encryption_key = "่ILOVEPYTHONSOMUCH185FA8E7A45F54DAS";
       $encryption = openssl_encrypt($plantext, $ciphering,
            $encryption_key, $options, $encryption_iv);
            setcookie('token', $encryption, time() + 21600, "/");
    }
    else{
       // do sweet-alert jobs error
       header("location: index.html")
    }
   }
?>
