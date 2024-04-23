<?php
$countries = [
  "Індія" => ["Населення" => 1200000000, "Столиця" => "Дели"],
  "Японія" => ["Населення" => 125000000, "Столиця" => "Токіо"],
  "Канада" => ["Населення" => 38000000, "Столиця" => "Оттава"],
];

echo "<h3>3x2:</h3>";
echo "<table border='1'>";
foreach ($countries as $country => $data) {
  echo "<tr><td>$country</td><td>".implode(', ', $data)."</td></tr>";
}
echo "</table>";
echo "<h3>2x3:</h3>";
echo "<table border='1'>";
$keys = array_keys($countries);
$values = array_values($countries);
echo "<tr>";
foreach ($keys as $key) {
  echo "<td>$key</td>";
}
echo "</tr>";
echo "<tr>";
foreach ($values as $v) {
  echo "<td>".implode(', ', $v)."</td>";
}
echo "</tr>";
echo "</table>";
