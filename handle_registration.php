<?php
include("connect.php");
?>
<!doctype html>
<head>
<title>Gulu Memoirs Marathon 2016</title>
</head>
<body>
<h1>Gulu Memoirs Marathon Official site</h1>

<?php
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$telephone_number=$_REQUEST["telephone_number"];

$query="INSERT INTO registrations SET name='".$name."', email='".$email."', telephone_number='".$telephone_number."'";

$result=run_query($query);

echo "Great! you have been registered";
Thank you for registering successfully, we will email/call you as soon as possible!;
?>

</body>
</html>
<html>
<body>

