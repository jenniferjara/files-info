<?php
abstract class Article{
	protected $name;
	protected $price;
	protected $igv;
	protected $color;

	public function setName($name){
		return $this-> name = $name;
	}
	public function setPrice($price){
		return $this-> price = $price;
	}
	public function setIgv($igv){
		return $this-> igv = $igv;
	}

	// abstract protected function getName();
	// abstract protected function getPrice();
	// abstract protected function getIgv();
}

interface Actions {
	// public function getName();
	public function getPrice();
	public function getIgv();
}