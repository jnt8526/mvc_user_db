<?php 
	include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<?php 
		$usersObj = new UsersView();
		$usersObj->showUser("John");

		$usersObj2 = new Userscontr();
		$usersObj2->createUser("Jane", "Doe", "1895-03-01");

		$usersObj3 = new UsersView();
		$usersObj3->showUser("Jane");
	?>
</body>
</html>