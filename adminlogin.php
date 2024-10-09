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

if($input_username=='vasu@gmail.com' and $input_password=='1234')
{
    $sql = "SELECT * FROM DonarDetails";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<h2>Donar Details</h2>';
        echo '<table border="1">';
        echo '<tr><th>Donarname</th><th>mobilenumber </th><th>Donar_location </th><th>foodtype</th><th>quantity</th></tr>';

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Donarname"] . "</td>";
            echo "<td>" . $row["mobilenumber"] . "</td>";
            echo "<td>" . $row["Donar_location"] . "</td>";
            echo "<td>" . $row["foodtype"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "</tr>";
        }

        echo '</table>';
    } else {
        echo "No records found in the DonarDetails table.";
    }

}
else{
    echo '<script type="text/javascript">
    alert("Entered wrong details.");
    window.location.href = "adminlogin.html";
  </script>';
}