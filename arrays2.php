<?php
	$nota = array (0,1,2);
	
	//Insertar valor al final del array
	$nota[] = 3;
	echo "Apartado C: ";
	print_r($nota);
	
	echo "<br>";
	//Eliminar el primer valor
	unset($nota[0]);
	echo "Apartado D: ";
	print_r($nota);
	
?>
