<?php
include "interface.php";

class Square implements Shape {
	private $color = null;

	public function getColor(){
		return $this-> color;
	}
	public function setColor($color){
		$this-> color = $color;
	}
	public function describe(){
		return sprintf("I'm an %s %s\n", $this->getColor(), get_class($this));
	}
}

$Square1 = new Square();
$Square1-> setColor("Orange");
// echo $Square1-> describe();

class Circle implements Shape {
	private $newColor;

	public function setColor($newColor){
		$this-> newColor = $newColor;
	}
	public function getColor(){
		return "this color is " . $this-> newColor;
	}
}

$circle1 = new Circle();
$circle1-> setColor("red");
echo $circle1-> getColor();