<?php
function connect_pdo(){
    $dburl = "mysql:dbname=du_an_1;hostname:localhost";
    $user = "root";
    $pass = "";
    try{
        $conn = new PDO($dburl,$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connected";
    }catch(PDOException $e){
        throw $e;
    }
    // return $conn;
}
connect_pdo()
?>