<?php
include 'base.php';

class Suma extends Base{
	public function Operation($param1, $param2){
		echo $param1 + $param2;
	}
}

// suma::operation(4, 53);
$view = new Suma();
echo $view -> Operation(37, 5);