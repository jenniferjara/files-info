<?php
include "abstract.php";

class Honda extends Car implements Cars {
	protected $model;

	public function calMiles(){
		return $this -> tankVolume * 30;
	}
	public function calPrice(){
		return $this-> priceModel * 2;
	}
	public function getColor($color){
		return $color;
	}
	public function setModel($model){
		$this-> model = $model;
	}
	public function getModel(){
		return $this-> model;
	}
}

$Honda1 = new Honda(3, 6);
$Honda1-> setModel("D34Wr");
$Honda1-> setPrice(20);
echo $Honda1-> calMiles();
echo "\n";
echo $Honda1-> calPrice();
echo "\n";
echo $Honda1-> getColor(green);
echo "\n";
echo $Honda1-> getModel();