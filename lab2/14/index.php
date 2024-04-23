<?php

function multiplyTable($value) {
  for ($i = 2; $i <= 9; $i++) {
    echo '<td>' . $i . '*' . $value . '=' . $i * $value . '</td>';
  }
}
echo '<table border="2">';
for ($j = 1; $j <= 10; $j++) {
  echo '<tr>';
  multiplyTable($j);
  echo '</tr>';
}
echo '</table>';
