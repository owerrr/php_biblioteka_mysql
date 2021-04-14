<?php

require_once("config.php");

if(isset($_GET['id'])){

    # open sql connection
    $connection = new mysqli(servername, user, password, database);

    if($_GET['type'] == 'increase'){
        $sql = "UPDATE books SET amount = ".($_GET['amount']+1)." WHERE ID =".($_GET['id']);
    }else{
        if($_GET['amount'] > 0){
            $sql = "UPDATE books SET amount = ".($_GET['amount']-1)." WHERE ID =".($_GET['id']);
        }
    }
    $res = mysqli_query($connection, $sql);

    if(devMode){
        var_dump($sql);
        echo "<br/>";
        var_dump($res);
        echo "<br/>";
        echo "<input type='button' value='Powrót do strony głównej' onclick='window.location.href = `index.php`'>";

        echo"<br/><br/>";
        var_dump($connection->error);
    }

//    echo $_GET['amount'];
//    echo $_GET['id'];

//    echo $sql;
//
//    var_dump($connection->error);

    //var_dump($res);

    # close sql connection
    $connection->close();

}
if(!devMode){
    header("Location: index.php");

}
