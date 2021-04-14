<?php
    require_once("BooksRepo.php");

    if(filter_has_var(INPUT_POST, 'book-title') and filter_has_var(INPUT_POST, 'book-author') and filter_has_var(INPUT_POST, 'book-price') and filter_has_var(INPUT_POST, 'book-amount'));{
        #open sql connection
        $connection = new mysqli(servername, user, password, database);

        $sql = "UPDATE books SET    title = '".$_POST['book-title']."'"
                                .", author = '".$_POST['book-author']."'"
                                .", price = ".$_POST['book-price']
                                .", amount = ".$_POST['book-amount']
                                ." WHERE id = ".$_GET['id'];
        $res = mysqli_query($connection, $sql);

//        var_dump($res);
//
//        var_dump($connection->error);

        #close sql connection
        $connection->close();
    }

if(!devMode){
    header("Location: index.php");
}else{
    echo "<br/><input type='button' value='Powrót do strony głównej' onclick='window.location.href = `index.php`'>";

    echo"<br/><br/>";
    if ($connection->error) var_dump($connection->error);
}