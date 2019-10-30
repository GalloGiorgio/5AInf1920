<?php

	$d1 = array('occitana', 'classica', 'medievale', 'moderna');

	$d2 = ['dance', 'disco', 'dinamo', 'dodo'];  //abbreviato

	//specifico le celle
	$d3 = array(
		0 => "dad",
		1 => "date",
		2 => "day",
		3 => "dab"
	);

	//hashtable chiave valore
	$d4 = array(
		"aa" => "dare",
		"bb" => "dandi",
		"cc" => "desert",
		"dd" => "dump"
	);

    //Celle in sequenza
	$d5 = array(0 => 'dentist', 'dos', 'dom', 'dan');

	//stampa d1
	foreach($d1 as $cella){
		echo $cella . ' ,';
	}
    echo '<br>';

	//stampa d2
	foreach($d2 as $cella2){
		echo $cella2 . ' ,';
	}
	echo '<br>';

	//stampa d3
	foreach($d3 as $cella3){
		echo $cella3 . ' ,';
	}
	echo '<br>';

	//stampa d4
	echo $d4["aa"]. '<br>';
	echo $d4["bb"]. '<br>';
	echo $d4["cc"]. '<br>';
	echo $d4["dd"]. '<br>';
	echo '<br>';
	

	//stampa d5
	foreach($d3 as $cella4){
		echo $cella4 . ' ,';
	}
	echo '<br>';

	//aggiungo un valore
	$d1[] = 'daz';
	$d2[] = 'daf';
	$d3[] = 'dus';
	$d4[] = 'duck';
	$d5[] = 'dop';
?>







