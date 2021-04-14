<?php

    require_once("config.php");
    if(isset($_GET['id'])){
        //echo ($_GET['id']);

        # open sql connection
        $connection = new mysqli(servername, user, password, database);

        $sql = "DELETE FROM books WHERE ID =".($_GET['id']);
        $res = mysqli_query($connection, $sql);

        //var_dump($res);

        if(devMode){
            echo "<br/><input type='button' value='Powrót do strony głównej' onclick='window.location.href = `index.php`'>";

            echo"<br/><br/>";
            var_dump($connection->error);
        }

        # close sql connection
        $connection->close();

    }
    if(!devMode){
        header("Location: index.php");
    }

