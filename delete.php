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

	//echo $id.$it1.$it2.$it3.$it4.$it5;
	$tsql= "DELETE FROM lists WHERE listname = '$id'";
	//$params = array($did, $it1, $it2, $it3, $it4, $it5);
	$getResults= sqlsrv_query($conn, $tsql);

	if ($getResults){
		echo "Deleted";
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