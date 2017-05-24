<?php
include 'base.php';

// class Suma extends Base{
// 	public function Operation($param1, $param2){
// 		$param3 = $param2 - 1;
// 		return $param1 + $param3;
// 	}
// }

// // suma::operation(4, 53);
// $view = new Suma();
// echo $view -> Operation(3, 5);

class Sumar implements Base{
	function operation ($num1, $num2){
		return $num1 + $num2;
	}
}

$new_suma = new Sumar();
echo $new_suma-> operation(35, 20);