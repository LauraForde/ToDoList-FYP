 <?php
 // DB connection info
 $host = "localhost\sqlexpress";
 $user = "laura";
 $pwd = "ABCd1234";
 $db = "todolist";
 try{
     $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $sql = "CREATE TABLE registration_tbl(
     id INT NOT NULL IDENTITY(1,1) 
     PRIMARY KEY(id),
     name VARCHAR(30)
     item1 VARCHAR(30)";
     $conn->query($sql);
 }
 catch(Exception $e){
     die(print_r($e));
 }
 echo "<h3>Table created.</h3>";
 ?>