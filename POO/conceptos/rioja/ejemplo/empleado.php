<?php
class Asalariado {
	private $name;
	private $id;
	private $vacaciones;

	function __construct($name, $id, $vacaciones){
		$this-> name = $name;
		$this-> id = $id;
		$this-> vacaciones = $vacaciones;
	}

	public function setName($new_name){
		$this-> name = $new_name;
	}
	public function setId($new_dni){
		$this-> id = $new_dni;
	}
	public function setVacaciones($new_vac){
		$this-> vacaciones = $new_vac;
	}

	public function getName(){
		return $this-> name;
	}

	public function getId(){
		return $this-> id;
	}
	public function getVacaciones(){
		return $this-> vacaciones;
	}
	public function datos(){
		return "Name: " . $this-> name . "\n" .
				"Id: " . $this-> id . "\n" .
				"Holiday: " . $this-> vacaciones;
	}
}

class emProd extends Asalariado{
	private $turno; 

	public function setTurno($new_turno){
		$this-> turno = $new_turno;
	}
	public function getTurno(){
		return $this-> turno;
	}

	public function datoTurno(){
		return "\nTurno: " . $this-> turno;
	}

}

$new_emp1 = new emProd("lalo", 23, 54);
$new_emp1-> setTurno("tarde");
$new_emp1-> setId(123455);
$new_emp1-> setVacaciones(90);
echo $new_emp1-> datos();
echo $new_emp1-> datoTurno();

echo "\n";

// class emDist extends emProd {

// 	private $zone;

// 	public function setZone($new_zone){
// 		$this-> zone = $new_zone;
// 	}

// 	public function getZone(){
// 		return "\nZone: " . $this-> zone;
// 	}

// }
// $new_emp2 = new emDist("malu", 12121, 3);
// $new_emp2-> setZone("arequipa");
// echo $new_emp2-> datos();
// echo $new_emp2-> getZone();