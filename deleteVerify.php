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

    echo<<<TEXT
        <form action="delete.php?id="{$_GET['id']} method="GET" >
        <input type="submit" value="Potwierdź usunięcie?id=" class="submit-delete-book btn-verify-delete" name="submit"/>
        <input type="button" value="Powrót" class="btn-back btn-verify-delete" onclick="window.location.href = 'index.php'"/>
        </form>
     TEXT;
?>
</div>
</body>
</html>
