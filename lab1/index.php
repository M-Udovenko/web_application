<?php
$rows = 5;
$columns = 3;
echo '<html><body>';
echo '<table border="2">';
for ($i = 1; $i <= $rows; $i++) {
  echo '<tr>';
  for ($j = 1; $j <= $columns; $j++) {
    if (($i + $j) % 2 == 0) {
      $c = "green";
    } else {
      $c = "red";
    }
    echo '<td bgcolor=' . $c . '><font color="yellow">' . $i, $j . '</font></td>';
  }
  echo '</tr>';
}
echo '</table>';


// echo phpinfo(INFO_ALL);
echo "<p>Виконуємо завдання лабораторної роботи № 1 !!!</p>";

$file = 'text.txt';
if (file_exists($file)) {
  echo '<p>' . file_get_contents($file) . '</p>';
} else {
  echo 'Файл не знайдено.';
}

$colors = array(
  "Синій" => "#0000FF",
  "Червоний" => "#FF0000",
  "Зелений" => "#00FF00",
  "Жовтий" => "#FFFF00",
);

echo '<table>';
foreach ($colors as $color => $hex) {
  $rgb = sscanf($hex, "#%02x%02x%02x");
  $rgb_s = implode(", ", $rgb);
  echo "<tr>";
  echo "<td style='background-color: $hex;'>$color</td>";
  echo "<td>$hex</td>";
  echo "<td>RGB($rgb_s)</td>";
  echo "</tr>";
}
echo '</table>';


echo '<table border="2">';
for ($i = 1; $i <= 9; $i++) {
  echo '<tr>';
  for ($j = 1; $j <= 9; $j++) {
    echo '<td>' . $j . '*' . $i . '=' . $i * $j . '</td>';
  }
  echo '</tr>';
}
echo '</table>';
echo '</body></html>';
