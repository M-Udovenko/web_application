<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 4</title>
</head>

<body>
  <form action="" method="post">
    <label for="login">Логін:</label>
    <input type="login" id="filename" name="login" required><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit" name="submit" value="login">Вхід</button>
    <button type="submit" name="submit" value="registration">Реєстрація</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $action = $_POST["submit"];
    if ($action == "login") {
      if (file_exists($login)) {
        if (file_get_contents($login) == $password) {
          echo "Доброго дня, $login!";
        } else {
          echo "Пароль не правильний!";
        }
      } else {
        echo "Такий користувач не зареєстрований!";
      }
    } elseif ($action == "registration") {
      if (file_exists($login)) {
        echo "Такий користувач вже існує!";
      } else {
        file_put_contents($login, $password);
      }
    }
  }
  ?>
</body>

</html>