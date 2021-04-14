<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="owr#6062">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- linked css -->
    <link rel="stylesheet" href="css/main.css">

    <!-- site title -->
    <title>Biblioteka | Strona główna</title>
</head>
<body>

    <div class="login-panel">
        <form action="login.php" method="POST">
            <label for="username">Username</label>
            <br/><input type="text" name="username">
            <br/><label for="password">Password</label>
            <br/><input type="password" name="password" />
            <br/><br/><input type="submit" value="Zaloguj" class="sign-in"/>
        </form>
    </div>

    <div class="main-container">
        <h1>Dostępne książki:</h1>
        <hr width="350px" />
        <br/>

        <div class="books-box">
            <?php

            require_once("config.php");
            require_once("BooksRepo.php");
            require_once("database.php");

            database::createDatabase();


            # open sql connection
            $connection = new mysqli(servername, user, password, database);

            # connection check
            if($connection->connect_error) die("Unexpected error with database!<br/>".$connection->connect_error);


            $sql = "SELECT Id,Title,Author,Price,Amount FROM books";
            $res = mysqli_query($connection, $sql);

            if(devMode){
                echo "<div class='devInfo'>Tryb deweloperski aktualnie jest uruchomiony.<br/>Aby go zdezaktywować, przestaw wartość 'devMode'.</div>";

                var_dump($sql);
                echo "<br/><br/>";
                var_dump($res);
                echo "<br/><br/>";


            }

            //var_dump($res);

            if(mysqli_num_rows($res) > 0){
                echo<<<TEXT
                <table class="books-tbl">
                    <tr>
                        <th>lp</th>
                        <th>Tytuł</th>
                        <th>Autor</th>
                        <th>Cena</th>
                        <th>Ilość</th>
                    </tr>
                TEXT;

                foreach($res as $row){
                    echo "<tr>"
                            ."<td>".$row['Id']."</td>"
                            ."<td>".$row['Title']."</td>"
                            ."<td>".$row['Author']."</td>"
                            ."<td>".$row['Price']."</td>"
                            ."<td>".$row['Amount']."</td>"
                            ."<td>"
                                ."<a href='editForm.php?id=".$row['Id']."'><i class='fas fa-edit tbl-edit'></i></a>"
                                ."<a href='delete.php?id=".$row['Id']."'><i class='fas fa-trash tbl-delete'></i></a>"
                                ."<a href='amountOperation.php?type=increase&id=".$row['Id']."&amount=".$row['Amount']."'><i class='fas fa-plus tbl-edit'></i></a>"
                                ." <a href='amountOperation.php?type=decrease&id=".$row['Id']."&amount=".$row['Amount']."'><i class='fas fa-minus tbl-edit'></i></a>"
                            ."</td>";
                }

                echo "</table>";
                //echo $html;
            }

            # close sql connection
            $connection->close();


            ?>
        </div>

        <div class="addBook" onclick = "window.location.href = 'addBook.php'">
            Dodaj nową
        </div>

    </div>



<!-- script -->
    <script src="https://kit.fontawesome.com/293893692c.js" crossorigin="anonymous"></script>

</body>
</html>