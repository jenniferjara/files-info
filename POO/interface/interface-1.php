<?php
include "interface.php";

class Square implements Shape {
	private $color;

	public function setColor($color){
		$this-> color = $color;
	}
	public function getColor(){
		return $this-> color;
	}
	public function describe(){
		return sprintf("I'm an %s %s\n", $this->getColor(), get_class($this));
	}
}

$Square1 = new Square();
$Square1-> setColor("Orange");
// echo $Square1-> describe();

class Circle implements Shape {
	private $color;

	function __construct($color){
		$this-> color = $color;
	}
	public function getColor(){
		return "this color is " . $this-> color;
	}
}

$circle1 = new Circle("orange");
echo $circle1-> getColor();