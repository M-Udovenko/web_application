<?php
$from = (int)$_POST['num1'];
$to = (int)$_POST['num2'];
$n = 10;
if($from > $to){
  $tmp = $from;
  $from = $to;
  $to = $tmp;
}
echo '<table border="2">';
while ($from <= $to) {
  if ($from === 0) {
    break;
  }
  $output = $n . " / " . $from . " = " . $n / $from;
  echo "<tr><td>" . $output . "</td></tr>";
  $from++;
}
echo '</table>';
