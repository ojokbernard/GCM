<!doctype html>
<html>
	<head>
		<title>Gulu Memoirs Marathon</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<style>
		body {
		  padding-top: 50px;
		}
		</style>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Gulu Memoirs Marathon</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About us</a></li>
				<li><a href="#contact">Contact us</a></li>
				<li><a href="#volunteer">Volunteers</a></li>
				<li><a href="#Partners">Partners</a></li>
				<li
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>
		
		<div class="container">
			<h1>Gulu Memoirs Marathon Official site</h1>
			<h2>Registration</h2>
			<h3>To participate sign up here</h3>
			
			
				<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ojokbernard@googlemail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
		</div>
		
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>
