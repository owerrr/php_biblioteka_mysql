<?php
require_once "BooksRepo.php";
if(filter_has_var(INPUT_POST, 'book-title') and isset($_POST['book-author']) ) {
    $title = trim(filter_input(INPUT_POST, 'book-title', FILTER_SANITIZE_STRING));
    $author = trim(filter_input(INPUT_POST, 'book-author', FILTER_SANITIZE_STRING));
    $price = floatval(filter_input(INPUT_POST, 'book-price'));
    $amount = intval(filter_input(INPUT_POST, 'book-amount'));

//    var_dump($title);
//    var_dump($author);
//    var_dump($price);
//    var_dump($amount);

    $b = new Books($title, $author, $price, $amount);
    //var_dump($b);
    BooksRepo::saveBook($b);

//    header("Location : index.php");

}else{
    header("Location : addBook.html");
}