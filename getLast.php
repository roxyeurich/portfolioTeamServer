<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

try {
  $conn = new PDO("mysql:host=edo4plet5mhv93s3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=a06uev86awzcjt3y","ofzywzaw9umo2n3o","nubyug4j44dg6i6z");
} catch (PDOException $e){
  echo "Error".$e->getMessage();
}

$pf_id =$_POST["pf_id"];

$query = "SELECT * FROM portfolios ORDER BY pf_id DESC LIMIT 4";

$result = $conn->query($query);
if($result){
  
  $portfolios=$result->fetchAll();
  echo json_encode($portfolios); 
  
} else {
  echo json_encode(false);
}

?>