<?php
$login = $_POST['login'];
$password = $_POST['password'];
$authUsers = array(
  "log1" => array("Рамський Петре Івановичу", "12345678"),
  "log2" => array("Сергій Іванович", "651465"),
  "log3" => array("Володимир Іванович", "141227"),
);

if (array_key_exists($login, $authUsers)) {
  [$name, $pswd] = $authUsers[$login];

  switch ($login) {
    case 'log1':
      if ($password === $pswd) {
        echo "<p>Доброго дня, $name!</p>";
      } else {
        echo "<p>Введений неправильний пароль для користувача $name.</p>";
      }
      break;
    case 'log2':
      if ($password === $pswd) {
        echo "<p>Доброго дня, $name!</p>";
      } else {
        echo "<p>Введений неправильний пароль для користувача $name.</p>";
      }
      break;
    case 'log3':
      if ($password === $pswd) {
        echo "<p>Доброго дня, $name!</p>";
      } else {
        echo "<p>Введений неправильний пароль для користувача $name.</p>";
      }
      break;
    default:
      echo "<p>Вибачте, ви у нас не зареєстровані.</p>";
      break;
  }
} else {
  echo "<p>Вибачте, ви у нас не зареєстровані.</p>";
}
