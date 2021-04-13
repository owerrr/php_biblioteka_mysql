<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="owr#6062">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- linked css -->
    <link rel="stylesheet" href="css/main.css">

    <!-- site title -->
    <title>Biblioteka | Edytuj książkę</title>
</head>
<body>

<div class="main-container">
    <h1>Edytuj książkę numer <?php echo $_GET['id']; ?></h1>
    <hr width="350px" />
    <br/>

    <div class="books-box">

        <?php
            require_once("Books.php");
            require_once("BooksRepo.php");
            require_once("config.php");

            # open sql connection
            $connection = new mysqli(servername, user, password, database);

        $sql = "SELECT Id,Title,Author,Price,Amount FROM books WHERE id = ".$_GET['id'];
        $res = mysqli_query($connection, $sql);

//            var_dump($res);

            foreach($res as $row){
                $b = new Books($row['Title'],$row['Author'],$row['Price'],$row['Amount']);
            }

//            var_dump($b);



            # close sql connection
            $connection->close();


            echo<<<TEXT
            <form action="edit.php?id={$_GET['id']}" method="POST">
            <div class="form-section">
                <label for="book-title">Tytuł</label>
                <br/>
                <input type="text" class="book-title" id="book-title" name="book-title" maxlength="50" required value="{$b->getTitle()}">
            </div>
            <div class="form-section">
                <label for="book-author">Autor</label>
                <br/>
                <input type="text" class="book-author" id="book-author" name="book-author" maxlength="50" required value="{$b->getAuthor()}">
            </div>
            <div class="form-section">
                <label for="book-price">Cena</label>
                <br/>
                <input type="number" class="book-price" id="book-price" name="book-price" maxlength="10" required step="0.01" value="{$b->getPrice()}">
            </div>
            <div class="form-section">
                <label for="book-amount">Ilość</label>
                <br/>
                <input type="number" class="book-amount" id="book-amount" name="book-amount" maxlength="11" required value="{$b->getAmount()}">
            </div>
            <div class="form-section">
                <input type="submit" value="Dodaj" class="books_add-btn"/>
                <input type="button" value="Powrót" class="books_add-btn" onclick="window.location.href = 'index.php' "/>
            </div>
            </form>
            TEXT;

        ?>

    </div>
</div>

</body>
</html>