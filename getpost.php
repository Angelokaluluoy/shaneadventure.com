
<?php
  // Replace the placeholders with your actual database credentials
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shaneable";

  // Create a new connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Fetch posts from the database
  $sql = "SELECT * FROM upload";
  $result = $conn->query($sql);

  // Display the posts
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Extract post data
      $title = $row['title'];
      $content = $row['caption'];
      $image = $row['photo'];

      // Display the post
      echo '<div class="post">';
      echo '<h2>' . $title . '</h2>';
      echo '<img src="' . $image . '" alt="Post Image">';
      echo '<p>' . $content . '</p>';
      echo '</div>';
    }
  } else {
    echo "No posts found.";
  }

  // Close the connection
  $conn->close();
?>
