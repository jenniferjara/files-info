<?php
class Car{
	protected $model;

	public function setModel($model){
		$this -> model = $model;
	}
	// public function hello(){
	// 	return "beep! I am a " . $this -> model . "!";
	// }
}

class SportCars extends Car{
	private $style = "so fast";

	public function hello(){
		return "beep! I am a " . $this -> model . "!";
	}
	
	public function driveStyle(){
		return "I am going " . $this -> style;
	}
}

$SportCars1 = new SportCars;
$SportCars1-> setModel("Mercedez");
echo $SportCars1-> hello();
echo "\n";
echo $SportCars1-> driveStyle();