<?php
    require_once "Books.php";
    require_once "config.php";

class BooksRepo{

    public static function saveBook(Books& $b):void
    {

        # open sql connection
        $connection = new mysqli(servername, user, password, database);


        $sql = "INSERT INTO books (title,author,price,amount) VALUES"
            ."('".$b->getTitle()."','".$b->getAuthor()."'   ,".$b->getPrice().",".$b->getAmount().")";

        $res = mysqli_query($connection, $sql);

        var_dump($connection->error);

        var_dump($res);


        # close sql connection
        $connection->close();

        header("Location: index.php");
    }

    public static function getBookById(int $id):Books{

        # open sql connection
        $connection = new mysqli(servername, user, password, database);

        $sql = "SELECT * FROM books WHERE id = ".$id;
        $res = mysqli_query($connection, $sql);

        var_dump($res);

        return new Books($res['title'],$res['author'],$res['price'],$res['amount']);

        # close sql connection
        $connection->close();

    }

}