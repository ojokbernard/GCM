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
				<li<?php if ($nav_selected_page == "home") echo ' class="active"'; ?>><a href="/index.php">Home</a></li>
				<li<?php if ($nav_selected_page == "about_us") echo ' class="active"'; ?>><a href="/About us.php">About us</a></li>
				<li<?php if ($nav_selected_page == "contact_us") echo ' class="active"'; ?>><a href="/Contact us.php">Contact us</a></li>
				<li<?php if ($nav_selected_page == "volunteers") echo ' class="active"'; ?>><a href="/Volunteers.php">Volunteers</a></li>
				<li<?php if ($nav_selected_page == "partners") echo ' class="active"'; ?>><a href="/Partners.php">Partners</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>