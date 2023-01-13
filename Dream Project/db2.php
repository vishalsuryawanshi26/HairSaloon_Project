<?php

//fetching values of form into php variables
  $fname = $_POST['fname'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $nearby = $_POST['nearby'];
  $date = $_POST['date'];
  $time = $_POST['time'];

//   code for database connection
 $conn = new mysqli('localhost','root','','vipform',3306);
 
  if ($conn->connect_error) {
    die('Connection failed...'.$conn->connect_error);
  }
  else {

    $stmt = $conn->prepare( "insert into vips_table
    (fname,gender,address,nearby,date,time)
    values(?,?,?,?,?,?)
    ");

    $stmt->bind_param("ssssss",$fname,$gender,$address,$nearby,$date,$time);
    $stmt->execute();
    echo "Form successfully submitted 👍. <br>";
    $stmt->close();
    $conn->close();
  }

?>