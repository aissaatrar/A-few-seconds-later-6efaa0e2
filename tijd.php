<?php
$character = 's';
$numbersArray = array();
foreach ($argv as $value)
{
  $pos = strpos($value, $character);
  if ($pos)
  {
    $intVariable = '';
    for ($i=0; $i < (strlen($value) - 1); $i++)
    {
      $intVariable = $intVariable . $value[$i];
    }
    if (!is_numeric($intVariable))
    {
      echo "$intVariable is geen tijd \n";
    }
    else
    {
      echo "$intVariable secondes \n";
    }
  }
}
 ?>
