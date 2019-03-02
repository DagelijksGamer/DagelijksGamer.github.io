<?php echo"<a href=\"../WorldAirports/dl/".$data['ICAO'].".zip\">";?>
	<div class="airportBox">
		<div class="boxHeader">
			<div class="boxName">
				<p class="spaceText">|</p><b><?php echo $data['name']; ?></b> in <b><?php echo $data['City'];?></b>, <b><?php echo $data['SPI']; ?></b>, <b><?php echo $data['country']; ?></b>
			</div>
			<br>
			<div>
				<table class="airportBoxContents">
					<tr>
						<td class="airportData"> ICAO: <?php echo $data['ICAO']; ?></td>
						<td class="image" rowspan="7"><?php  echo "<img src=\"https://api.mapbox.com/styles/v1/mapbox/streets-v11/static/".$data['lon'].",".$data['lat'].",7,0,0/300x200?access_token=pk.eyJ1IjoiZGFnZWxpamtzZ2FtZXIiLCJhIjoiY2pzcm51dm5uMTcxNzRibzZkYmRjczl6bCJ9.mU5-cNe-J8PF56jgVHUhqA\"/>";?></td>
					</tr>
					<tr>
						<td> IATA: <?php echo $data['IATA']; ?></td>
					</tr>
					<tr>
						<td> Latitude: <?php echo $data['lat']; ?></td>
					</tr>
					<tr>
						<td> Longtitude: <?php echo $data['lon']; ?></td>
					</tr>
					<tr>
						<td> Elevation: <?php echo $data['elev']; ?></td>
					</tr>
					<tr>
						<td> Runways: <?php echo $data['rwy']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</a>
