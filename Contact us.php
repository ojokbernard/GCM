<?php
$nav_selected_page = "contact_us";
include("includes/page_start.php");
?>
		
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
		
		<?php
include("includes/page_stop.php");
?>
