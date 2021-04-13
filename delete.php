<?php

    require_once("config.php");
    if(isset($_GET['id'])){
        //echo ($_GET['id']);

        # open sql connection
        $connection = new mysqli(servername, user, password, database);

        $sql = "DELETE FROM books WHERE ID =".($_GET['id']);
        $res = mysqli_query($connection, $sql);

        //var_dump($res);

        # close sql connection
        $connection->close();

    }
    header("Location: index.php");

