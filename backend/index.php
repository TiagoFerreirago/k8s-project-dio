<?php
header("Access-Control_Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'connect.php';

$id = rand(1,999);
$fullname= $_POST["fullname"];
$email= $_POST["email"];
$comment= $_POST["comment"];

$query = "INSERT INTO messages (id, fullname, email, comment) VALUES ('$id', '$fullname', '$email', '$comment')";

if($link->query($query) === TRUE){
    echo "New record created successfully";
}
else{
    echo "Error: " . $query . "<br>" . $link->error;
}

?>