<?php
$nome = "Raúl";
$idade = -17;


if ($idade >= 18) {
	echo "El ciudadano ".$nome." puede votar ";
	echo date("d/m/Y");
}
elseif ($idade < 18 and $idade >= 0) {
	echo "El ciudadano ".$nome." no puede puede votar porque es menor de edad ";
	echo date("d/m/Y");
}
else 
	echo "El dato introducido es incorrecto, por favor introduzca un número positivo";
?>
