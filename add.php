<?php
	$serverName = "tdldatabase.database.windows.net";
	$connectionOptions = array(
		"Database" => "todolist",
		"Uid" => "laura",
		"PWD" => "ABCd1234"
	);
	//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);
	$tsql= "INSERT INTO lists(listname, item1, item2, item3, item4, item5) VALUES (?,?,?,?,?,?);";
	$params = array("shop", "1234", "gbfvd", "bgrvfd", "rbfd", "trgfe");
	$getResults= sqlsrv_query($conn, $tsql, $params);
	if ($getResults == FALSE)
		echo print_r(sqlsrv_errors(), true);
	else{
		$rowsAffected = sqlsrv_rows_affected($getResults);
		echo ($rowsAffected. " row(s) inserted" . PHP_EOL);
		sqlsrv_free_stmt($getResults);
	}
?>