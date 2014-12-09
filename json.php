<?php

//allows access from external sources
header('Access-Control-Allow-Origin: *');

//retrieve results from database
$conn = new PDO('mysql:host=localhost;dbname=nest', 'username', 'password');

$statement = $conn->prepare("SELECT heat, auto_away, leaf, insert_time, temperature FROM statistics ORDER BY insert_time");
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

//new empty statistics array
$statistics = array();

//generate new array with serials and temperatures
if (!empty($rows)) {
	foreach($rows as $row) {
		$rounded = substr_replace($row['insert_time'], "", -3);
		$timestamp = strtotime($rounded . ':00') . '000';	
		$statistics[$timestamp]['value'] = $row['temperature'];
		
		if ($row['heat'] == "1") {
			$color = "red";
		} elseif ($row['auto_away'] == "1") {
			$color = "blue";		
		} elseif ($row['leaf'] == "1") {
			$color = "green";
		} else {
			$color = "yellow";		
		}
		
		$statistics[$timestamp]['color'] = $color;		
	}
}

echo json_encode($statistics);

?>