<?php
$user = array(
  "Прізвище" => $_POST["surname"],
  "Ім'я" => $_POST["name"],
  "Вік" => $_POST["age"],
  "Email" => $_POST["email"]
);

echo "<table border='1'>";
foreach ($user as $key => $value) {
  echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
