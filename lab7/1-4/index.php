<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 1-4, Lab 7</title>
</head>

<body>
  <form action="" method="post">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login" required><br>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>
    <label for="name">Ім'я:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="birthDate">Дата народження:</label>
    <input type="date" id="birthDate" name="birthDate" required><br>
    <label for="gender">Стать:</label>
    <select id="gender" name="gender">
      <option value="male">Чоловіча</option>
      <option value="female">Жіноча</option>
      <option value="other">Інше</option>
    </select><br>
    <label for="country">Країна:</label>
    <input type="text" id="country" name="country" required><br>
    <label for="email">Електронна пошта:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="note">Примітка:</label>
    <input type="text" id="note" name="note" required><br>
    <br><br>
    <button type="submit" name="submit" value="reg">Реєстрація</button>
  </form>

  <?php
  $dbHost  = "db";
  $dbUser  = "root";
  $dbPassw  = "password";
  $dbName  = "maxim";

  $link = mysqli_connect($dbHost, $dbUser, $dbPassw, $dbName, 3306);

  function getUsers($link)
  {
    $query = "SELECT * FROM Users";
    $result = mysqli_query($link, $query);

    if (!$result) {
      echo "Помилка: " . mysqli_error($link);
    } else {
      echo "<br><br><table border='1'>";
      echo "<tr><th>Логін</th><th>Ім'я</th><th>Дата народження</th><th>Стать</th><th>Країна</th><th>Email</th><th>Примітка</th></tr>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['login'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['birthDate'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['note'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_free_result($result);
    }
  }

  if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] == "reg") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $birthDate = $_POST["birthDate"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $note = $_POST["note"];

    if (!$link) {
      echo "Помилка: " . mysqli_connect_error();
    } else {
      $query = "INSERT INTO Users (login, password, name, birthDate, gender, country, email, note) 
                  VALUES ('$login', '$password', '$name', '$birthDate', '$gender', '$country', '$email', '$note')";

      if (mysqli_query($link, $query)) {
        echo "Користувач успішно доданий до бази даних.";
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
      } else {
        echo "Помилка при виконанні запиту:: " . mysqli_error($link);
      }
    }
  }
  getUsers($link);
  mysqli_close($link);
  ?>
</body>

</html>