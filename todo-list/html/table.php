<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "on_the_fly";

$conn = mysqli_connect("localhost", "root", "", "on_the_fly");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

// Generate HTML output
if ($result->num_rows > 0) {
   
    echo "<table>";
    echo "<tr><th>task_id</th><th>task_name</th><th>deadline</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["task_id"]."</td>
        <td>".$row["task_name"]."</td>
        <td>".$row["deadline"]."</td></tr>
       
    }
    
    // echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>

