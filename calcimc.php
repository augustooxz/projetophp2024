<?php 
	
	$nome = "Lucas";
	$peso = 65;
	$altura = 1.78;

	function calcimc ($peso , $altura){

		return ($peso /($altura * $altura));
	}

	$imc = calcimc ($peso , $altura);
	
	printf ("Olá $nome seu peso é $peso KG e sua altura é $altura seu IMC %.2f", $imc);

 ?>