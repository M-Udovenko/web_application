<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 2, 3</title>
  <style>
    th,
    td {
      border: 1px solid black;
      text-align: left;
      padding: 8px;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Тег</th>
      <th>Опис</th>
    </tr>
    <?php
    $file = fopen("tags.txt", "r");
    $c = 0;

    while (!feof($file)) {
      $tag = fgets($file);
      $description = fgets($file);
      $c++;
      echo "<tr>";
      echo "<td><b>&lt$tag&gt</b></td>";
      echo "<td>$description</td>";
      echo "</tr>";
    }

    fclose($file);
    echo "<h3>Всього у файлі описано тегів: $c</h3>";
    ?>
  </table>
</body>

</html>