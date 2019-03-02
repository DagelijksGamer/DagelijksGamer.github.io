<!DOCTYPE html>
<html>
<head>
	<title>World Airports | Fly anywhyere in your sim!</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php include "scripts/header.php";
		$servername = "localhost";
		$username = "jeroen";
		$password = "B6vCrTnqA2wf19KowtLd";	
		$dbname = "worldairports";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		//Get number of airports
		$sql = "SELECT id FROM airports";
		$result = $conn->query($sql);

		foreach ($result as $id) {
			foreach ($id as $noa) {
			}
		}

	?>
	<div class="body">
		<div class="bodycontents">
			<div class="welcomeText">
				<p><b><?php echo $noa."</b> airports are available."; ?></p>
			</div>
			<h2>Our most recent airports</h2>
			<?php 
		include 'scripts/recent.php'; ?>
		</div>
	</div>
</body>
</html>