<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shaneable";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

// Rest of your code goes here


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $caption = $_POST["caption"];
  
  // Process and save the uploaded image to a folder
  $targetDir = "uploads/";
  $imageName = basename($_FILES["img"]["name"]);
  $targetPath = $targetDir . $imageName;
  
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetPath)) {
    // Image uploaded successfully, now save the post details to the database
    // Modify the following code to match your database table and column names
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO upload (title, caption, photo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $caption, $imageName);
    
    // Execute the statement
    if ($stmt->execute()) {
      // Post saved to the database successfully
      
      // Redirect back to the blog page
      header("Location:blogpost.php");
      exit();
    } else {
      // Error occurred while saving the post
      echo "Error: " . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
  } else {
    // Error occurred while uploading the image
    echo "Error uploading the image.";
  }
}

// Close the database connection
$conn->close();
?>
