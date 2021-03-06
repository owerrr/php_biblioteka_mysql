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
  <title>Biblioteka | Dodaj książkę</title>
</head>
<body>

  <div class="main-container">
    <h1>Dodaj nową książkę:</h1>
    <hr width="350px" />
    <br/>

    <div class="books-box">
        <?php
            require_once("config.php");

            if(devMode){
                echo "<div class='devInfo'>Tryb deweloperski aktualnie jest uruchomiony.<br/>Aby go zdezaktywować, przestaw wartość 'devMode'.</div>";
            }
        ?>
      <form action="addNewBook.php" method="POST">
        <div class="form-section">
          <label for="book-title">Tytuł</label>
          <br/>
          <input type="text" class="book-title" id="book-title" name="book-title" maxlength="50" required>
        </div>

        <div class="form-section">
          <label for="book-author">Autor</label>
          <br/>
          <input type="text" class="book-author" id="book-author" name="book-author" maxlength="50" required>
        </div>

        <div class="form-section">
          <label for="book-price">Cena</label>
          <br/>
          <input type="number" class="book-price" id="book-price" name="book-price" maxlength="10" required step="0.01">
        </div>

        <div class="form-section">
          <label for="book-amount">Ilość</label>
          <br/>
          <input type="number" class="book-amount" id="book-amount" name="book-amount" maxlength="11" required>
        </div>

        <div class="form-section">
          <input type="submit" value="Dodaj" class="books_add-btn"/>
          <input type="button" value="Powrót" class="books_add-btn" onclick="window.location.href = 'index.php' "/>
        </div>

      </form>

    </div>
  </div>

</body>
</html>