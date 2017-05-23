<?php

/* Objeto Constructor */
class Movie {
	public $title;
	public $director;
	public $duration;

	public function __construct($title, $director, $duration){
		$this-> title = $title;
		$this-> director = $director;
		$this-> duration = $duration; 
	}

	// protected function setTitle();
	// protected function setDirector();
	// protected function setDuration();

	// protected function getTitle();
	// protected function getDirector();
	// protected function getDuration();
}

$movie1 = new Movie("Un día de carreras", "Sam Wood", 111);
// echo $movie1-> title;