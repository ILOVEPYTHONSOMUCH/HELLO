<?php
  // file website for do the register to studies !
  if ($_POST['regis']){ // check button click events
    // connect db
     $server_db = "localhost"; 
     $username_db = "root";
     $password_db= "";
     $db = "rickctf"; // database name 
     $conn = mysqli_connect($server_db, $username_db, $password_db, $db);
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $surname = mysqli_real_escape_string($conn, $_POST['surname']);
     $id = mysqli_real_escape_string($conn, $_POST['id']);
     $address = mysqli_real_escape_string($conn, $_POST['address']);
     $grade = mysqli_real_escape_string($conn, $_POST['grade']);
     $info = mysqli_real_escape_string($conn, $_POST['info']);
     $id_hash = password_hash($id, PASSWORD_DEFAULT); // hash card id 
     $address_hash = password_hash($address, PASSWORD_DEFAULT); // hash address
     $info = password_hash($info, PASSWORD_DEFAULT); // hash info
     $sql = "INSERT INTO student_db(name, surname, id, address, grade, info) VALUES ('$name','$surname','$id_hash','$address_hash','$grade','$info')";
     $query_db = mysqli_query($conn, $sql);
     // Done !!!!!
  } 

   
?>
