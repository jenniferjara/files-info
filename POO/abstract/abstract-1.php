<?php
include "abstract.php";

class Honda extends Car {
	public function calMiles(){
		return $milesHonda = $this -> tankVolume * 30;
	}
	public function calPrice(){
		return $priceHonda = $this-> priceModel * 2;
	}
	public function getColor($color){
		return $color;
	}
}

$Honda1 = new Honda();
$Honda1-> setTankVolume(3);
$Honda1-> setPrice(6);

echo $Honda1-> calMiles();
echo "\n";
echo $Honda1-> calPrice();
echo "\n";
echo $Honda1-> getColor(green);
