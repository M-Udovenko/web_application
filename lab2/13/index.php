<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 13</title>
</head>

<body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="start">Початкове число бактерій:</label>
    <input type="number" id="start" name="start" required>
    <br>
    <label for="end">Кінцеве число бактерій:</label>
    <input type="number" id="end" name="end" required>
    <br>
    <button type="submit">Порахувати</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = (int)$_POST['start'];
    $end = (int)$_POST['end'];
    $c = 0;
    if ($start > $end) {
      return;
    }
    do {
      $c++;
      $start *= 2;
      echo "$c. Минулa $c год. - маємо $start бактерій.<br>";
    } while ($start <= $end);
  }
  ?>
</body>

</html>