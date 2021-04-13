<?php

require_once("config.php");

if(isset($_GET['id'])){

    # open sql connection
    $connection = new mysqli(servername, user, password, database);

    if($_GET['type'] == 'increase'){
        $sql = "UPDATE books SET amount = ".($_GET['amount']+1)." WHERE ID =".($_GET['id']);
    }else{
        if($_GET['amount'] <= 0) return header("Location: index.php");
        $sql = "UPDATE books SET amount = ".($_GET['amount']-1)." WHERE ID =".($_GET['id']);
    }
    $res = mysqli_query($connection, $sql);

//    echo $_GET['amount'];
//    echo $_GET['id'];

//    echo $sql;
//
//    var_dump($connection->error);

    //var_dump($res);

    # close sql connection
    $connection->close();

}
header("Location: index.php");

