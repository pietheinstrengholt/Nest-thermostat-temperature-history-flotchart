<?php

//allows access from external sources
header('Access-Control-Allow-Origin: *');

//retrieve results from database
$conn = new PDO('mysql:host=localhost;dbname=nest', 'username', 'password');

$statement = $conn->prepare("SELECT insert_time, temperature FROM statistics ORDER BY insert_time");
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

//new empty statistics array
$statistics = array();

//generate new array with serials and temperatures
if (isset($_GET["temperature"])) {
	if (!empty($rows)) {
		foreach($rows as $row) {
			$timestamp = strtotime($row['insert_time']) . '000';	
			$statistics[$timestamp] = $row['temperature'];
		}
	}
}

echo json_encode($statistics);

?>
