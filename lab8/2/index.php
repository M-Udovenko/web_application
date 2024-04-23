<?php
class Country
{
  private $name;
  private $population;
  private $capital;

  public function __construct($name, $capital, $population)
  {
    $this->name = $name;
    $this->population = $population;
    $this->capital = $capital;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getCapital()
  {
    return $this->capital;
  }

  public function getPopulation()
  {
    return $this->population;
  }
}

$Country = array(
  new Country("Canada", "Ottawa", 9345000),
  new Country("Australia", "Canberra", 4319000),
  new Country("Brazil", "Brasília", 3092000)
);

echo "<table border='1'>";
foreach ($Country as $country) {
  echo "<tr>";
  echo "<td>Name:</td><td>{$country->getName()}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Capital:</td><td>{$country->getCapital()}</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>Population:</td><td>{$country->getPopulation()}</td>";
  echo "</tr>";
  echo "<tr><td colspan='2'>&nbsp;</td></tr>";
}
echo "</table>";
