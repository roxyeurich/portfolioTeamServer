<?php
header('Access-Control-Allow-Origin: *'); 
try {
  $conn = new PDO("mysql:host=edo4plet5mhv93s3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=a06uev86awzcjt3y","ofzywzaw9umo2n3o","nubyug4j44dg6i6z");
} catch (PDOException $e){
  echo "Error".$e->getMessage();
}


//$name =$_POST["name"];
//$lastname =$_POST["lastname"];
//$pass =$_POST["pass"];
//$email =$_POST["email"];
//$username =$_POST["username"];
//$age =$_POST["age"];
//$location =$_POST["location"];
//$admin =$_POST["admin"];


//$query = "SELECT * FROM users WHERE email='$email'";

//"SELECT * FROM users WHERE username='$username' AND password = '$password';

//USE THIS TO TEST IF INFO IS GOING INTO DATABASE:
$query = "INSERT INTO users (name, lastname, pass, email, username, age, location, admin) VALUES ('test', 'test', 'test', 'test', 'test','test', 'test', 1)";

$result = $conn->query($query);
if($result){
  $users=$result->fetchAll();
  
//  if (!empty($users)){
//    echo json_encode(false);  
//  } else {
//   
////USE THIS TO GET REAL DATA FROM ID's    
////    $query = "INSERT INTO users (email, password, username, admin) VALUES ('$email', '$password', '$username', 1)";
//
//
//    //"SELECT * FROM users WHERE username='$username' AND password = '$password';
//    //$query = "INSERT INTO users (email, password, username, status) VALUES ('test', 'test', 'test', 1)";
//
//    $result = $conn->query($query);
//    if($result){
//      $userid=$conn->lastInsertId();
//      echo json_encode(array(
////        'status'=>true,
////        'id'=>$userid,
//      ));
//
//    } else {
//      echo json_encode(false);
//    }
//  }
//  
//  
} else {
  echo json_encode(false);
}


?>