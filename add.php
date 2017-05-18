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

	// Reading in all the variables from the form
	$id = $_POST['id'];
	$it1 = $_POST['item1'];
	$it2 = $_POST['item2'];
	$it3 = $_POST['item3'];
	$it4 = $_POST['item4'];
	$it5 = $_POST['item5'];

	// Query the database and add the items
	$tsql= "INSERT INTO lists(listname, item1, item2, item3, item4, item5) VALUES (?,?,?,?,?,?);";
	$params = array($id, $it1, $it2, $it3, $it4, $it5);
	
	$getResults= sqlsrv_query($conn, $tsql, $params);
	if ($getResults == FALSE)
		echo print_r(sqlsrv_errors(), true);
	else{
		// Go back to the index.php file
		Redirect('http://todolisting.azurewebsites.net/index.php', false);
}

	// http://stackoverflow.com/questions/768431/how-to-make-a-redirect-in-php
	function Redirect($url, $permanent = false){
		header('Location: ' .$url, true, $permanent ? 301 : 302);
		exit();
	}
?>