<?php
	#Array - Variable that holds multiple values
	/*
		- Indexed
		- Associative
		- Multi-dimensional
	*/

	// Indexed
	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 12);
	$cars = ['Honda', 'Toyota', 'Ford'];
    // adding to cars
    $cars [3] = "Chervy"; // to spesefic index
    $cars [] = "BMW";  // to the last one

	//echo count($cars);
    // print_r($cars);
    // OUtput:  Array ( [0] => Honda [1] => Toyota [2] => Ford [3] => Chervy [4] => BMW ) 
	// var_dump($cars); // type of variable

    // ****************
	// Associative arrays
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
	$cars = ['BMW' => 15450, 'Ford'=>  444];

    // echo $cars['BMW'];
	//echo $people['Brad'];
	//echo $ids[22];
	$cars['Chervy'] = 4254547;
	// print_r($cars);
	//var_dump($people);

	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Ford', 23, 12)
	);

	// echo $cars[1][2];
?>