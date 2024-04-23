<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 12</title>
</head>

<body>
  <h2>Відгадай число</h2>
  <?php
  $number = 2054;
  $result = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = $_POST['guess'];

    if ($guess == $number) {
      $result = "Вгадали!";
    } else {
      $result = "Не вгадали!";
      if ($guess > $number) {
        $result .= " Загадане число менше.";
      } else {
        $result .= " Загадане число більше.";
      }
    };
  }
  ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="guess">Введіть ваше число:</label>
    <input type="text" id="guess" name="guess" required>
    <button type="submit">Відгадати</button>
  </form>


  <?php if (!empty($result)) { ?>
    <script>
      alert("<?php echo $result; ?>");
    </script>
  <?php } ?>
</body>

</html>