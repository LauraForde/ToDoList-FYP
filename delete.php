<?php
	$serverName = "tdldatabase.database.windows.net";
	$connectionOptions = array(
		"Database" => "todolist",
		"Uid" => "laura",
		"PWD" => "ABCd1234"
	);
	//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);

	$id = $_POST['did'];

	$tsql= "DELETE FROM lists WHERE listname = '$id'";
	$getResults= sqlsrv_query($conn, $tsql);

	if ($getResults){
        Redirect('http://todolisting.azurewebsites.net/index.php', false);
    }
	else{
		echo "ERROR";
    }

	// http://stackoverflow.com/questions/768431/how-to-make-a-redirect-in-php
	function Redirect($url, $permanent = false){
		header('Location: ' .$url, true, $permanent ? 301 : 302);
		exit();
	}
?>