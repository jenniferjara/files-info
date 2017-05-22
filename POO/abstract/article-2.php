<?php
include "article.php";

class tipo1 extends Article implements Actions {
	public function getIgv(){
		return $this-> price * $this-> igv;
	}
	// public function getName(){
	// 	return $this-> name;
	// }
	public function getPrice(){
		return $this-> price + $this-> getIgv();
	}
}

$t11 = new tipo1();
// $t11-> setName("factura");
$t11-> setIgv(0.18);
$t11-> setPrice(11);
echo $t11-> getIgv();
echo "\n";
// echo $t11-> getName();
// echo "\n";
echo $t11-> getPrice();

// class tipo2 extends Article{
// 	public $color;

// 	function getIgv(){
// 		return $this-> igv;
// 	}
// 	function getName(){
// 		return "the name is " . $this-> name;
// 	}
// 	function getPrice(){
// 		return $this-> price + 100 + $this-> igv;
// 	}
// 	function getColor(){
// 		return $this-> color;
// 	}
// }

// $tp2 = new tipo2();
// $tp2-> setName("boleta");
// $tp2-> setPrice(109);
// $tp2-> setIgv(1.20);
// $tp2-> color = "red";

// echo $tp2-> getName();
// echo "\n";
// echo $tp2-> getPrice();
// echo "\n";
// echo $tp2-> getColor();
