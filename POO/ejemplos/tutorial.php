<?php

class Car{
	public $name;
	public $color;
	public $hasSunRoof;
	public $tank;
	private $model = '';

	public function Saludo(){
		return "Beep! I'm a " . $this -> name . ", and I'm color " . $this -> color;
	}
	public function fill($float){
		$this -> tank += $float;
		return $this;
	}

	public function ride($float){
		$miles = $float;
		$gallons = $miles/50;
		$this -> tank -= $gallons;
		return $this;
	}
	// public function setModel($model){
	// 	// validar solo dos modelos
	// 	$allowed = array("BMW", "Audi");
	// 	if(in_array($model, $allowed)){
	// 		$this -> model = $model;
	// 	}else{
	// 		$this -> model = "desconocido.";
	// 	}
	// }
	// Con un constructor
	public function __construct($model = null){
		if($model){
			$this-> model = $model;
		}
	}
	public function getModel(){
		return "En ". get_class($this) . " este modelo es ". $this-> model;
	}

}

// ejemplo 1
// instanciar un objeto 
$bmw = new Car('BMW');
// acceder y modificar el valor de la prop
$bmw -> name = 'BMW';
$bmw -> color = 'red';
$tank = "El numero de galones restane es " . $bmw -> fill(20) -> ride(60) -> tank;
// ver resultado en la consola
echo $bmw -> Saludo() .", ". $tank;

echo "\n";
// $bmw -> setModel($bmw -> name);
echo $bmw -> getModel();

echo "\n";

// ejemplo 2: la misma dinamica del ejemplo 1 solo cambia el resultado al imprimir
$audi = new Car();
$audi -> name = 'Audi';
$audi -> color = 'verde';
// $saludar = $audi -> Saludo();
// $audi -> setModel("Mercedez");
// echo $audi-> getModel();
// echo $saludar;
// echo "\n";

/**********************************/

class User {
  public $firstName;
  public $lastName;
 
  public function hello(){
    return "hello ". $this-> firstName ." ". $this-> lastName;
  }
  public function register(){
  	// echo $this -> firstName .": usuario registrado";
  	return $this;
  }
  public function mail(){
  	// echo $this-> firstName . ", tu mail ya esta registrado";
  	return $this;
  }
}
// instanciar clase User
$user1 = new User();
$user1->firstName = 'John';
$user1->lastName  = 'Doe';
$hello = $user1->hello();

$user2 = new User();
$user2 ->firstName = 'Jane';
$user2 ->lastName  = 'Doe';
$hello2 = $user2 -> hello();
 
// imprimir los resultados en la consola
// echo $hello;
$user1 -> register() -> mail();
// echo "\n";
// echo $hello2;

