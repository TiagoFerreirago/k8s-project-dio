<?php
$server_name= "mysql-connection";
$username = "root";
$password = "senha123";
$database = "systemclient";

$link = new mysqli($server_name, $username, $password, $database);

if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>