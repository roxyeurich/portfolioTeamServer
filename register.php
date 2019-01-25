<?php
header('Access-Control-Allow-Origin: *'); 
try {
  $conn = new PDO("mysql:host=edo4plet5mhv93s3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=a06uev86awzcjt3y","ofzywzaw9umo2n3o","nubyug4j44dg6i6z");
} catch (PDOException $e){
  echo "Error".$e->getMessage();
}

$fname =$_POST["fname"];
$lname =$_POST["lname"];
$pass =$_POST["pass"];
$email =$_POST["email"];
$username =$_POST["username"];
$age =$_POST["age"];
$location =$_POST["location"];
$admin =$_POST["admin"];


//USE THIS TO TEST IF INFO IS GOING INTO DATABASE:
$query = "INSERT INTO users (fname, lname, pass, email, username, age, location, admin) VALUES ('$fname', '$lname', '$pass', '$email', '$username','$age', '$location', 1)";



//$query = "INSERT INTO users (fname, lname, pass, email, username, age, location, admin) VALUES ('test', 'test', 'test', 'test', 'test','test', 'test', 1)";


$result = $conn->query($query);
if($result){
 echo json_encode(true); 
}



?>