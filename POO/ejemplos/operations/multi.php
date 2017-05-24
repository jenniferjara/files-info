<?php
include "base.php";

class resta implements base{
	// private $num1;
	// private $num2;
	// function __construct($a, $b){
	// 	$this-> num1 = $a;
	// 	$this-> num2 = $b;
	// }
	public function operation($parm1, $parm2){
		$sub = $parm1 * $parm2;
		return $parm1 * $parm2 + $sub;
	}
}

$new_resta = new resta();
echo $new_resta-> operation(12, 3);