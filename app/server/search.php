<?php

$search = $_GET['term'];
	$SQL = "SELECT * FROM TblSoReason WHERE ReasonCode LIKE '%".$search."%'";
	$result = sqlsrv_query($dbhandle, $SQL);
	   	while($db = sqlsrv_fetch_object($result)) {
		        $items[] = $db;
		    }
		
	 echo json_encode($items);


?>