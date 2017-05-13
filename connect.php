<?php
    include_once 'index.php';

    $table = "CREATE TABLE IF NOT EXISTS list(
        id int(25) NOT NULL PRIMARY KEY,
        listItem VARCHAR(255) NOT NULL
    )";

    try{
        $conn->query($table);
        echo "Created";
    }catch(PDOException $ex){
     echo "ERROR".$ex->getMessage();
    }
?>