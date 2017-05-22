<?php

$color = 'blue';
$item = 'pen';

sprintf('I have a %s %s', $color, $item);

pi();

function calcNumMilesOnFullTank(array $models) {
  foreach($models as $item){
    // echo $carModel = $item[0];
    // echo " : ";
    // echo $numberOfMiles = $item[1] * $item[2];
    // echo "\n";
   }
}

$models = array (
	array("Toyota", 12, 3),
	array("BMW", 3, 49)
);
$dara = "text";

// calcNumMilesOnFullTank($models);

/********************************/
class Song {
	public $title;
	public $description;
}

$song1 = new Song();
$song1-> title = "Beat it!";
$song1-> description = "It doesn't matter who's wrong or right... just beat it!";

function Sing($song1){
	return "Singing the song called " . $song1-> title . "\n" . $song1-> description;
}

echo Sing($song1);
echo "\n";

/**********************************/

// String length without strlen()

$s = 'str';
$i=0;
while ($s[$i] != '') {
	  $i++;
}
echo $i;

if ($i <= 4){
	echo "hola";
} else {
	echo "bye";
}

/**********************************/

