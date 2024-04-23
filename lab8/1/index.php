<?php
class CustomMultiplicationTable
{
  private $number;

  public function __construct($number)
  {
    $this->number = $number;
  }

  public function generate()
  {
    echo "<p>Multiplication Table for {$this->number}:</p>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
      echo "<tr>";
      echo "<td>{$this->number}</td>";
      echo "<td>*</td>";
      echo "<td>{$i}</td>";
      echo "<td>=</td>";
      echo "<td>" . ($this->number * $i) . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
}

$customTable3 = new CustomMultiplicationTable(2);
$customTable3->generate();

$customTable5 = new CustomMultiplicationTable(55);
$customTable5->generate();

$customTable5 = new CustomMultiplicationTable(5);
$customTable5->generate();
