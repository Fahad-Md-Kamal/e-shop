<?php

include_once 'DB_Connection.php';

function TableCreate(){
    $conn = DataBaseConnection();

    // Creating Users table
    $sql = "CREATE TABLE users(
        id INT(10) PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50),
        email VARCHAR(100),
        pass VARCHAR(20)
    )";

    if ($conn->error) {
        die("Failed to Create table users:" . $conn->error);
    }
    $conn->query($sql);

    // Creating product table

}


?>