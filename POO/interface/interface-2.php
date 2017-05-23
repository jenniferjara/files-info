<?php
include "interface.php";

class Square implements Shapes {
	private $width;
	private $height;

	// function __construct($width, $height){
	// 	$this-> width = $width;
	// 	$this-> height = $height;
	// }
	function __construct($width, $height){
		$this-> width = $width;
		$this-> height = $height;
	}
	function area(){
		return $this-> width * $this-> height;
	}
}

$square1 = new Square(30, 3);
echo $square1-> area();