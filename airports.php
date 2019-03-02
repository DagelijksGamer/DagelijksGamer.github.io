<?php 

$id = $_GET['id'];
$username = "root"; 
$password = ""; 
$host = "localhost"; 
$dbname = "worldairports";
if ($id != null) {
	$conn = new mysqli($host, $username, $password, $dbname);
	$query = "SELECT * FROM airports WHERE id = '{$id}'";
	$result= $conn->query($query);
	while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
		$data['id'] 		=  $row['id'];
		$data['ICAO'] 		= $row['ICAO'];
		$data['IATA'] 		= $row['IATA'];
		$data['name'] 		= $row['Name'];
		$data['City']		= $row['City'];
		$data['SPI'] 		= $row['SPI'];
		$data['country'] 	= $row['Country'];
		$data['type'] 		= $row['Type'];
		$data['searches']	= $row['Searches'];
		$data['visits'] 	= $row['Visits'];
		include 'scripts/visits.php';

		if ($data['type'] == "0") {
			$AirportType = "Small airport"; 
		}elseif ($data['type'] == "1") {
			$AirportType = "Medium Airport"; 
		}elseif ($data['type'] == "2") {
			$AirportType = "Big Airport"; 
		}elseif ($data['type'] == "3") {
			$AirportType = "Seabase"; 
		}elseif ($data['type'] == "4") {
			$AirportType = "Heliport"; 
		}
	}
	$conn->close();
}

include 'scripts/header.php';
 ?>
 <head>
 	<title><?php echo "Welcome to ".$data['name'].", ".$data['SPI'].", ".$data['country']." | WorldAirports"; ?></title>
 </head>
