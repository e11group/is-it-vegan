<?php
header('Content-type: application/json');
require_once '../../vendor/autoload.php';
include('../config/config.php');
	
	$query = $_GET['q'];

	$result = dibi::query("SELECT * FROM vegan WHERE name LIKE %like~", $query);
	
	foreach ($result as $n => $row) {
		$items[] = $row;
	}

	if ($items) {
	 	echo json_encode($items);
	}


?>