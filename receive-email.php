<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shaneable";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the records from the database
$sql = "SELECT * FROM mail";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Output the records
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        $message = $row["msg"];

        // Display the record data
        echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Email:</strong> " . $email . "</p>";
echo "<p><strong>Message:</strong> " . $message . "</p>";
echo "<hr>";

    }
} else {
    echo "No records found.";
}

// Close the result and database connection
$result->close();
$conn->close();
?>
