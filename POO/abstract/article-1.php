<?php
include "article.php";

class tipo3 extends Article implements Actions {
	public function getName(){
		$i = 0;
		while ($this-> name[$i] != '') {
			$i++;
		}
		// echo $i;
		if ($i <= 6) {
			return $this-> name;
		} else {
			return "un dato mas corto";
		}
	}
	public function getIgv(){
		return $this-> igv + 1.15;
	}
	public function getPrice(){
		return $this-> price - $this-> getIgv();
	}
}

$tp3 = new tipo3();
$tp3-> setName("superpoderes");

echo $tp3-> getName();
echo "\n";
echo $tp3-> setPrice(12.40);
echo "\n";
echo $tp3-> getIgv();
echo "\n";
echo $tp3-> getPrice();
