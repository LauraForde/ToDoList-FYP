<?php
    include_once 'index.php';
    function add($id, $listItem){
        $insert = "INSERT INTO list(id, listItem)
                VALUES('1', 'Eggs, Bread, Milk')";

        try{
            $result = $conn->exec($insert);
            echo "worked";
        }catch(PDOException $ex){
                echo "ERROR".$ex->getMessage();
        }
    }
                
?>