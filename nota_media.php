<?php
//Declaro las variables de las notas , prácticas y exámenes
$nota_p1= 7; $nota_p2= 6; $nota_p3= 7; $nota_p4= 10;
$nota_ex1= 7; $nota_ex2= 6; 

//Declaro ambos arrys asociativos
$notasP = array ("Practica1"=>"$nota_p1", "Practica2"=>"$nota_p2", "Practica3"=>"$nota_p3", "Practica3"=>"$nota_p4");
$notasE = array ("Examen0001"=>"$nota_ex1", "Examen0002"=>"$nota_ex2");


//Creo una variable que calcula la media de examenes (suma las notas con "array_sum" y lo divide
// entre el numero de notas que cuenta con "count"
 
$mediaP = array_sum($notasP)/count($notasP);

//Lo mismo pero con la nota de los examenes
$mediaE = array_sum($notasE)/count($notasE);

//Calculo la media del módulo (tambien dentro de una variable) sabiendo que las prácticas valen un 40% 
//y los examenes un 50, es decir la nota será sobre 9
$media_modulo = ($mediaP*0.4)+($mediaE*0.5);


echo "Nota media de prácticas = ".$mediaP."<br>";
echo "Nota media de exámenes = ".$mediaE."<br>";
echo "Nota media del módulo = ".$media_modulo;

?>
