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
  <title>Biblioteka | Usuń książke</title>
</head>
<body>
<div class="main-container">
  <h2>Czy na pewno chcesz usunąć książkę o numerze <?php echo $_GET['id'] ?></h2>
  <hr width="350px" />
  <br/>


<?php

require_once("config.php");

    echo<<<TEXT
        <form method="POST" >
        <input type="submit" value="Potwierdź usunięcie" class="submit-delete-book btn-verify-delete" name="submit"/>
        <input type="button" value="Powrót" class="btn-back btn-verify-delete" onclick="window.location.href = 'index.php'"/>
        </form>
     TEXT;

if(isset($_POST['submit'])){

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
    if(!devMode){
        header("Location: index.php");
    }
}


?>
</div>
</body>
</html>
