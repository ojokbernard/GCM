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
		
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>
