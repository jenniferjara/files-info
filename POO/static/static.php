<?php
class Util {
	static public $numCars = 0;
	static public function addCars($int){
		$int = (int)$int;
		self::$numCars += $int;
	}
}

Util:: addCars(4);
Util::addCars(10);
Util::addCars(-9);
echo Util::$numCars;
 