<?php
	$serverName = "tdldatabase.database.windows.net";
	$connectionOptions = array(
		"Database" => "todolist",
		"Uid" => "laura",
		"PWD" => "ABCd1234"
	);
	//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);

	$eid = $_POST['eid'];
	$eit1 = $_POST['eitem1'];
	$eit2 = $_POST['eitem2'];
	$eit3 = $_POST['eitem3'];
	$eit4 = $_POST['eitem4'];
	$eit5 = $_POST['eitem5'];


	//echo $id.$it1.$it2.$it3.$it4.$it5;
	$tsql= "UPDATE lists SET listname = '$eid', item1='$eit1',item2='$eit2',item3='$eit3',item4='$eit4',item5='$eit5' WHERE listname='$eid'";
	//$params = array($did, $it1, $it2, $it3, $it4, $it5);
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