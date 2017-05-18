<?php
    // Setting up credentials for the connection to the server
	$serverName = "tdldatabase.database.windows.net";
	$connectionOptions = array(
		"Database" => "todolist",
		"Uid" => "laura",
		"PWD" => "ABCd1234"
	);
	//Trying to connect
	$conn = sqlsrv_connect($serverName, $connectionOptions);

    // Reading in the variable from the html form
	$id = $_POST['did'];

    // Delete the item with the id entered
	$tsql= "DELETE FROM lists WHERE listname = '$id'";
	$getResults= sqlsrv_query($conn, $tsql);

	if ($getResults){
        // Redirect to the index.php file
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