<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Развертывание приложения на хостинге</title>
  <style>
    main {
      width: 700px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
<main>
  <h1>Создание и загрузка приложения на хостинг</h1>
  <?php
  session_start();
  if (isset($_SESSION['login'])) {
    echo "<div>Добро пожаловать, ${_SESSION['login']}!</div>";
    echo "<a href='exit.php'>Выйти</a>";
  } else {
    include './form.html';
  }
  ?>
</main>
</body>
</html>
