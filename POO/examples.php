<?php

$color = 'blue';
$item = 'pen';

sprintf('I have a %s %s', $color, $item);

pi();

function calcNumMilesOnFullTank(array $models) {
  foreach($models as $item){
    echo $carModel = $item[0];
    echo " : ";
    echo $numberOfMiles = $item[1] * $item[2];
    echo "\n";
   }
}

$models = array (
	array("Toyota", 12, 3),
	array("BMW", 3, 49)
);

echo calcNumMilesOnFullTank($models);