<?php
include "abstract.php";

class Toyota extends Car {

	function calMiles(){
		$milesToyota = $this-> tankVolume * 4;
		return "va a necesitar " . $milesToyota . " galones";
	}
	public function calPrice(){
		$priceToyota = $this -> priceModel * 2;
		if($priceToyota <= 70){
			return "es menor o igual a 70";
		} else{
			return "es mayor a 70";
		}
	}
	public function getColor($color){
		return $color;
	}
}

$Toyota1 = new Toyota(7, 20);

echo $Toyota1-> calPrice();
echo "\n";
echo $Toyota1-> calMiles();