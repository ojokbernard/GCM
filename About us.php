<?php
$nav_selected_page = "about_us";
include("includes/page_start.php");
?>

<div class="container">
	<h1>Gulu Memoirs Marathon Official site</h1>
	<h2>Registrater</h2>
	<h3>To participate sign up here</h3>
	
	<form action="handle_registration.php" method="get">
		<div class="row">
			<div class="col-sm-2">
				<label for="inputEmail3" class="form-control-label form-control-static">Email</label>
			</div>
			<div class="col-sm-6">
				<input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="form-control-label form-control-static" for="name">Full Name</label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="name" name="name" placeholder="enter your name"/>
			</div>
		</div>
		 <div class="row">
			<div class="col-sm-2">
				<label class="form-control-label form-control-static" for="telephone_number">Telephone</label>
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="telephone_number" name="telephone_number" placeholder="enter your telephone"/>
			</div>
		</div>
		<input class="btn btn-success" type="submit" value="Register"/>
	
	</form>
</div>
		
<?php
include("includes/page_stop.php");
?>