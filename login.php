<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

try {
  $conn = new PDO("mysql:host=edo4plet5mhv93s3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=a06uev86awzcjt3y","ofzywzaw9umo2n3o","nubyug4j44dg6i6z");
} catch (PDOException $e){
  echo "Error".$e->getMessage();
}

$username =$_POST["username"];
$password =$_POST["password"];


$query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
  

$result = $conn->query($query);
if($result){
  $users=$result->fetchAll();
  
  if (count($users) === 0){
    echo json_encode(false);
  } else {
    echo json_encode(true);
  }
}


?>