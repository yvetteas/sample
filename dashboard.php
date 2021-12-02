
<!DOCTYPE html>
<html>
<head>
<title>Dashboard | Search Info</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container-dashboard">
		Welcome to the search info <span class="user-name"><?php echo ucwords($_SESSION['first_name'])?> <?php echo ucwords($_SESSION['last_name']);?> </span>
		<br>

		<a href="homepage.php" class="logout-link">Homepage</a>
	</div>
</body>
</html>
