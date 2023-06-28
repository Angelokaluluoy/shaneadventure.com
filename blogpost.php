
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/blog.css">
	<title>Author</title>
</head>
<body>
	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
		<a href="index.php"><img src="./images/minelogo.png" alt="site logo">
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="#">Homepage</a></li>
					<li><a href="#">Page 1</a></li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
					<li><a href="#">Page 4</a></li>
				</ul>
			</div>
			<div id="myBtn" class="burger-container" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>
	<!-- Navigation end -->
	<!-- Top banner -->
	<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
			<div class="top-banner__image">
				<img src="./images/heroo.jpg" alt="author image">
			</div>
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span class="brand-span">Hello! I'm</span>
					<h2 class="top-banner__h2">Shane</h2>
				</div>
				<div class="top-banner__text-down">
					<h2 class="top-banner__h2">Mallorca</h2>
					<span class="brand-span">Author, Writer, Traveler</span>
				</div>
				<p>One Woman. One Mission. Can She Go Beyond?</p>
			</div>
		</div>
	</section>
	<!-- Top banner end -->

<!-- Blog -->
<section class="fh5co-blog">
	<div class="site-container">
		<h2 class="section-title">Latest Blog Posts</h2>
		<?php
require_once 'dbconnection.php';

// Retrieve the posts from the database
$sql = "SELECT * FROM upload ORDER BY id DESC"; // Modify the query based on your table structure
$result = $conn->query($sql);

// Check if there are any posts
if ($result->num_rows > 0) {
  echo "<div class='blog-posts'>";

  while ($row = $result->fetch_assoc()) {
    // Display the post details
    $post_id = $row["id"];
    $title = $row["title"];
    $caption = $row["caption"];
    $image = $row["photo"];

    echo "<div class='blog-post'>";
    echo "<div class='blog-post__image'>";
    echo "<img src='uploads/$image' alt='Blog post image'>";
    echo "</div>";
    echo "<div class='blog-post__content'>";
    echo "<h3 class='blog-post__title'>$title</h3>";
    echo "<p class='blog-post__excerpt'>$caption</p>";
    echo "</div>";
    echo "</div>";
  }

  echo "</div>";
} else {
  echo "No posts found.";
}

// Close the result and database connection
$result->close();
$conn->close();
?>


  </div>
<!-- Blog end -->
	<!-- Social -->
	<section class="fh5co-social">
		<div class="site-container">
			<div class="social">
				<h5>Follow me!!</h5>
				<div class="social-icons">
				<a href="https://web.facebook.com/Shaneyyy23" target="_blank"><i class="ti-facebook"></i></a>
					<a href="https://www.instagram.com/shane.mllrca/" target="_blank"><i class="ti-instagram"></i></a>
					<a href="https://www.youtube.com/@mallorcashanea.7042" target="_blank"><i class="ti-youtube"></i></a>
				</div>
				<h5>Share it!</h5>
			</div>
		</div>
	</section>
	<!-- Social -->

	<!-- Footer -->
	<footer class="site-footer">
		<div class="site-container">
			<div class="footer-inner">
				<div class="footer-info">
					<div class="footer-info__left">
						<img src="./images/game.png" alt="about me image">
						
					</div>
					<div class="footer-info__right">
						<h5>Get In Touch</h5>
						<p class="footer-phone">Phone: 09123456789</p>
						<p>Email : shanemallorca46.com</p>
						<div class="social-icons">
						<a href="https://web.facebook.com/Shaneyyy23" target="_blank"><i class="ti-facebook"></i></a>
					<a href="https://www.instagram.com/shane.mllrca/" target="_blank"><i class="ti-instagram"></i></a>
					<a href="https://www.youtube.com/@mallorcashanea.7042" target="_blank"><i class="ti-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="footer-contact-form">
					<h5>Contact Form</h5>
					<form class="contact-form">
						<div class="contact-form__input">
							<input type="text" name="name" placeholder="Name">
							<input type="email" name="email" placeholder="Email">
						</div>
						<textarea></textarea>
						<input type="submit" name="submit" value="Submit" class="submit-button">
					</form>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="site-container footer-bottom-inner">
				<p>est. 2023 by <a href="https://freehtml5.co/" target="_blank">Mallorca Shane A.</a> | All rights Reserved.</p>
			</div>
		</div>
	</footer>
	<!-- Footer end -->
    <script>
    // Fetch posts from the PHP file and insert them into the HTML
    $(document).ready(function() {
      $.ajax({
        url: 'getposts.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          // Iterate over the fetched posts and insert them before the first post
          response.forEach(function(post) {
            var postHtml = '<div class="post">' +
              '<h2>' + post.title + '</h2>' +
              '<p>' + post.content + '</p>' +
              '</div>';

            // Insert the new post before the first post
            $('#posts-container').prepend(postHtml);
          });
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });
  </script>

	<!-- Scripts -->
	<script src="./js/jquery.min.js"></script>
	<script src="./js/slick.min.js"></script>
	<script src="./js/main.js"></script>

</body>
</html>