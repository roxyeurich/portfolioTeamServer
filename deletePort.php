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

//THIS INFO IS GOING INTO DATABASE:
$query = "DELETE FROM portfolios WHERE pf_id=$pf_id";


$result = $conn->query($query);
if($result){
 echo json_encode(true);
}



?>
