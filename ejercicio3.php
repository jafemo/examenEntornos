<?php


function sueldoTotal($horas, $categoria, $numHijos){
	$numHijos=2;
	$horas1=17;
	$horas2=14;
	$horas3=11;
	$totalHoras=30;
	$dineroHijos=15;
	$total=0;

	if ($categoria==1) {
		$total=$totalHoras*$horas1;
	}else{
		if ($categoria==2) {
			$total=$totalHoras*$horas2;
		}else{
			if ($categoria==3) {
				$total=$totalHoras*$horas3;
			}
		}
	}

	$total=$numHijos*$dineroHijos+$total;
	return $total;
}

echo sueldoTotal(17,1,2);



?>