<?php 

//Show most recent airports
$sql2 = "SELECT * FROM airports ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql2);

while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
		$data['ICAO'] 		= $row['ICAO'];
		$data['IATA'] 		= $row['IATA'];
		$data['name'] 		= $row['Name'];
		$data['City']		= $row['City'];
		$data['lat']		= $row['lat'];
		$data['lon']		= $row['lon'];
		$data['SPI'] 		= $row['SPI'];
		$data['country'] 	= $row['Country'];
		$data['elev'] 		= $row['elev'];
		$data['rwy'] 		= $row['rwy'];
		$data['type'] 		= $row['Type'];
		foreach ($id as $box){
			include 'airportBox.php';
		}
}


 ?>
