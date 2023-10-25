<?php
    if( isset($_GET['id'])) {
     $id = $_GET['id'];

     // Connection to the database
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $dbname = "myshop";

     $connection = new mysqli($hostname, $username, $password, $dbname);
     
     $sql = "DELETE FROM clients WHERE id=$id";
     $result = $connection->query($sql);
    }
    header("location: /myshop/index.php");
    exit;
?>