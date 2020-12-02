<?php
session_start();
$servername = "localhost";
$username = "PhmdCorp";
$password = "123456";
$dbname = "clientes";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) ;
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$nome = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'emai', FILTER_SANITIZE_EMAIL);

$sql = "INSERT INTO client (nome, email) VALUES ('$nome', '$email')";
$query = mysqli_query($conn,"SELECT * from client where Email = '$email'");


if(mysqli_num_rows($query)>0){
  echo "noooop";
}else{ 
    if (mysqli_query($conn, $sql)){
      echo "New record created successfully";
    }else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

mysqli_close($conn);
?>     
