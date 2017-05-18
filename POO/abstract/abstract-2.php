<?php
include "abstract.php";

class Toyota extends Car {

	function calMiles(){
		$milesToyota = $this-> tankVolume * 4;
		return "va a necesitar " . $milesToyota . " galones";
	}
	public function calPrice(){
		$priceToyota = $this -> priceModel * 3;
		if($priceToyota <= 20){
			return "es menor o igual a 20";
		} else{
			return "es mayor a 20";
		}
	}
}

$Toyota1 = new Toyota();
$Toyota1-> setPrice(7);
$Toyota1-> setTankVolume(30);

echo $Toyota1-> calPrice();
echo "\n";
echo $Toyota1-> calMiles();