<?php
$servername = "192.168.237.128";
$username = "admin";
$password = "123456789";
$dbname = "Productes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
    </div>
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
    </div>
</div>
