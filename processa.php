<?php
session_start();
$servername = "localhost";
$username = "PhmdCorp";
$password = "123456";
$dbname = "clientes";


//Criar a conexao
$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo "Connected successfully";

echo "<br>";
$nome = filter_input(INPUT_POST, 'NomeForm', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'SenhaForm', FILTER_SANITIZE_EMAIL);

echo "nome: $nome <br>";
echo "E-mail: $email <br>";

mysqli_query ($conn , "INSERT INTO client VALUES ('$email','$nome')");



  
?>