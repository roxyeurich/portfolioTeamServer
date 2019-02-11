<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

try {
  $conn = new PDO("mysql:host=edo4plet5mhv93s3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=a06uev86awzcjt3y","ofzywzaw9umo2n3o","nubyug4j44dg6i6z");
} catch (PDOException $e){
  echo "Error".$e->getMessage();
}

$user_id =$_POST["user_id"];

$query = "SELECT * FROM portfolios WHERE user_id='$user_id'";

$result = $conn->query($query);
if($result){
  $users=$result->fetchAll();
  echo json_encode($users); 
  
} else {
  echo json_encode(false);
}

?>