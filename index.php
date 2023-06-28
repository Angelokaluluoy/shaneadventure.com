<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">
	<title>Author</title>
</head>
<body>
	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
			<a href="index.html"><img src="./images/minelogo.png" alt="site logo"></a>
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="index.html">Homepage</a></li>
					<li><a href="blogpost.php">Blogs</a></li>
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
				<a href="Login/first.html" class="brand-button"> Admin Login > </a>
			</div>
		</div>
	</section>
	<!-- Top banner end -->

	<!-- About me -->
	<section class="fh5co-about-me" id="about me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="./images/mee.jpeg" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>S</span>
						<h2 class="universal-h2">hane Mallorca</h2>
					</div>
					<p>A simple Woman who loves to explore and learn new things</p>
				</div>
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me</h2>
						<p><span>S</span>hane is a simple woman from the summer capital of Negros Occidental.It's a small town located in the mountains of Negros Occidental, surrounded by lush forests and scenic views. I am an avid traveler and I love to explore new places and learn about different cultures. For me, traveling is not just a way to escape from the routine of everyday life, but also an opportunity to broaden my horizons and gain a new perspective on the world. I created this travel blog as a platform to share my travel experiences with others and inspire them to explore the world as well. Through my blog, I can provide helpful tips and recommendations, as well as showcase the beauty and uniqueness of the places I have visited.
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	<!-- About me end -->
	<!-- Blog -->
	<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">My Blog</h2>
			<?php
require_once 'dbconnection.php';

// Retrieve the two latest posts from the database
$sql = "SELECT * FROM upload ORDER BY id DESC LIMIT 2"; // Modify the query based on your table structure and sorting criteria
$result = $conn->query($sql);

// Check if there are any posts
if ($result->num_rows > 0) {
    echo "<div class='blog-slider blog-inner'>";

    while ($row = $result->fetch_assoc()) {
        // Display the post details
        $post_id = $row["id"];
        $title = $row["title"];
        $caption = $row["caption"];
        $image = $row["photo"];

        echo "<div class='single-blog'>";
        echo "<div class='single-blog__img'>";
        echo "<img src='uploads/$image' alt='Blog post image' style='width: 266px; height: 349px;'>";
        echo "</div>";
        echo "<div class='single-blog__text'>";
        echo "<h4>$title</h4>";
        echo "<p class='caption'>" . substr($caption, 0, 400) . "...</p>"; // Limit the caption to 100 characters using substr()
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




<br>
			<a href="blogpost.php"><h2 class="universal-h2 universal-h2-bckg">See All</h2></a>
	</section>
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
					<a href="#" target="_blank"><i class="ti-twitter-alt" ></i></a>
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
						<p class="footer-phone">Phone: +09123456789</p>
						<p>Email : shanemallorca46.com</p>
						<div class="social-icons">
							<a href="https://web.facebook.com/Shaneyyy23" target="_blank"><i class="ti-facebook"></i></a>
					<a href="https://www.instagram.com/shane.mllrca/" target="_blank"><i class="ti-instagram"></i></a>
					<a href="https://www.youtube.com/@mallorcashanea.7042" target="_blank"><i class="ti-youtube"></i></a>
					<a href="#" target="_blank"><i class="ti-twitter-alt" ></i></a>
						</div>
					</div>
				</div>
				<div class="footer-contact-form">
					<h5>Contact Form</h5>
					<form class="contact-form" method="POST" action="send-email.php">
						<div class="contact-form__input">
							<input type="text" name="name" placeholder="Name">
							<input type="email" name="email" placeholder="Email">
						</div>
						<textarea name="message" placeholder="Enter your message"></textarea>
						<input type="submit" name="submit" value="Submit" class="submit-button">
					</form>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="site-container footer-bottom-inner">
				<p>© 2023 Author | Design by <a href="https://freehtml5.co/" target="_blank">Shane Mallorca</a> | All rights Reserved.</p>
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
	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
	

</body>
</html>