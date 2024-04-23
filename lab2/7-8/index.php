<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 7, 8</title>
  <style>
    .red {
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <?php
  $number = 5;
  $result = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = $_POST['guess'];

    if ($guess == $number) {
      $result = "<p class='red'>ПРАВИЛЬНО!</p>";
    } else {
      $result = "<p>Спробуй ще раз!";
      if ($guess > $number) {
        $result .= " Загадане число менше.</p>";
      } else {
        $result .= " Загадане число більше.</p>";
      }
    }
    echo $result;
  }
  ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="guess">Введіть число:</label>
    <input type="text" id="guess" name="guess" required><br><br>
    <button type="submit">Перевірка</button>
  </form>
</body>

</html>