<?php
include "abstract.php";

class miniCar implements Cars {
	protected $model;
	function setModel($name){
		return $this -> model = $name;
	}
	function getModel(){
		return $this-> model;
	}
}

$miniCar1 = new miniCar();
$miniCar1-> setModel("model");
echo $miniCar1-> getModel();