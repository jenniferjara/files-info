<?php
abstract class Car{
	protected $tankVolume;
	protected $priceModel;

	public function setTankVolume ($volume){
		$this -> tankVolume = $volume;
	}
	public function setPrice($price){
		$this-> priceModel = $price;
	}

	abstract public function calMiles();
	abstract public function calPrice();
	abstract public function getColor($color);
}

interface Cars {
	public function setModel($name);
	public function getModel();
}