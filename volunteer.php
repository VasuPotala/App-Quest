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
$table ="VolunteerDetails";
$sql = $conn->query("SHOW TABLES LIKE '$table'");
if(!$sql->num_rows> 0 )
{
    $sql = "CREATE TABLE VolunteerDetails(
        volunteername VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL PRIMARY KEY
    )";
    if($conn->query($sql)){
        echo'successfully created';
    }
    else{
        echo'not created';
    }
}

// Get user input from form
$volunteer_name = $_POST['name'];
$volunteer_email = $_POST['email'];


$sql = "INSERT INTO VolunteerDetails(volunteername,email)
VALUES ('$volunteer_name','$volunteer_email')";
try{
if($conn->query($sql) == TRUE)
{
    echo '<script type="text/javascript">
    alert("You have successfully applied to become a volunteer.");
    window.location.href = "index.html";
  </script>';
    
}}
catch(Exception $e){
    echo '<script type="text/javascript">
            alert("Account already exists.");
            window.location.href = "index.html";
          </script>';
    
}