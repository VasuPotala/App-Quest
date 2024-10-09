<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DonationData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get user input from form
$input_username = $_GET['username'];
$input_password = $_GET['password'];

if($input_username=='vasupotala750@gmail.com' and $input_password=='vasu1234')
{
    $sql = "SELECT * FROM DonarDetails";
    $result = $conn->query($sql);
    
}
else{

}