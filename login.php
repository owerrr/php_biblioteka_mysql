<?php

require_once "config.php";

$username = $_POST['username'];
$password = $_POST['password'];


    $connection = new mysqli(servername, user, password, database);

    $sql = "SELECT permissions FROM users WHERE username = '".$username."' AND password = '".$password."'";
    $res = mysqli_query($connection, $sql);

    if(mysqli_num_rows($res) <= 0) return header("Location: index.php");

    $userPermissions = 0;

    foreach($res as $row){
        $_SESSION["userPermissions"] = $row['permissions'];
    }

    $connection->close();

header("Location: index.php");