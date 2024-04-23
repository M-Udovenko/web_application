<?php
class Calculator
{
  public function sum($a, $b)
  {
    return $a + $b;
  }

  public function subtract($a, $b)
  {
    return $a - $b;
  }

  public function divide($a, $b)
  {
    if ($b == 0) {
      return "Error: Division by zero";
    }
    return $a / $b;
  }

  public function modulo($a, $b)
  {
    if ($b == 0) {
      return "Error: Division by zero";
    }
    return $a % $b;
  }

  public function squareRoot($a)
  {
    if ($a < 0) {
      return "Error: Negative number has no real square root";
    }
    return sqrt($a);
  }

  public function power($a, $b)
  {
    return pow($a, $b);
  }
}

class Dispatcher
{
  private $calculator;

  public function __construct(Calculator $calculator)
  {
    $this->calculator = $calculator;
  }

  public function showForm()
  {
    echo "<form action='' method='post'>";
    echo "<label for='num1'>Number 1:</label>";
    echo "<input type='number' id='num1' name='num1' required><br>";
    echo "<label for='num2'>Number 2:</label>";
    echo "<input type='number' id='num2' name='num2' required><br>";
    echo "<label for='operation'>Operation:</label>";
    echo "<select id='operation' name='operation'>";
    echo "<option value='sum'>Addition</option>";
    echo "<option value='subtract'>Subtraction</option>";
    echo "<option value='divide'>Division</option>";
    echo "<option value='modulo'>Modulo Division</option>";
    echo "<option value='squareRoot'>Square Root</option>";
    echo "<option value='power'>Exponentiation</option>";
    echo "</select><br><br>";

    echo "<button type='submit' name='submit' value='calculate'>Calculate</button>";
    echo "</form>";
  }

  public function processRequest()
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"] == "calculate") {
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $operation = $_POST["operation"];

      if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: Both arguments should be numbers";
      }

      switch ($operation) {
        case "sum":
          return $this->calculator->sum($num1, $num2);
        case "subtract":
          return $this->calculator->subtract($num1, $num2);
        case "divide":
          return $this->calculator->divide($num1, $num2);
        case "modulo":
          return $this->calculator->modulo($num1, $num2);
        case "squareRoot":
          return $this->calculator->squareRoot($num1);
        case "power":
          return $this->calculator->power($num1, $num2);
        default:
          return "Unknown operation";
      }
    }
  }
}

$calculator = new Calculator();
$dispatcher = new Dispatcher($calculator);

$dispatcher->showForm();
$result = $dispatcher->processRequest();
echo "Result: $result";

