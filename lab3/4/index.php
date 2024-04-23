<?php

$arr1 = array();
$arr2 = array();
for ($i = 10; $i <= 20; $i++) {
  $arr1[] = $i ** 2;
}
for ($i = 1; $i <= 10; $i++) {
  $arr2[] = $i ** 3;
}
$result = $arr1 + $arr2;
echo json_encode($result);