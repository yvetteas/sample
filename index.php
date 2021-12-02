<?php
	session_start();

	if(isset($_POST['submit']))
	{
		if((isset($_POST['search']) && $_POST['search'] !=''))
		{
			$search = trim($_POST['search']);

			if($search == "searching for items")
			{
				header('location:dashboard.php');
				exit;
			}
			$errorMsg = "Search failed";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Search | Intro</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="container">
		<h1>Search</h1>
		<?php
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<div class="field-container">
				<label>Search:</label>
				<input type="search" name="search" required placeholder=" ">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Search</button>
			</div>
		</form>
	</div>
</body>
</html>
