<?php
	function get_grade($point){
		$point = (string) $point;
		$grades = [
			  "4" => "A+",
			  "3.75" => "A",
			  "3.5" => "A-",
			  "3.25" => "B+",
			  "3" => "B",
			  "2.75" => "B-",
			  "2.5" => "C+",
			  "2.25" => "C",
			  "2" => "D",
			  "0" => "F"
		];
		
		if (array_key_exists($point, $grades))
			return $grades[$point];
		else
			return 0;
		
	}


?>