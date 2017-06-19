<?php

$numero1=1;
$numero2=0;

for ($i=0; $i <=10 ; $i++) { 
	$suma=$numero1+$numero2;
	$numero1=$numero2;
	$numero2=$suma;
	echo $suma;
}

?>