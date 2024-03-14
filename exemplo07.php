<?php 


	function exibir(){
	STATIC $ano;
	$ano++;
	echo "<br> Ano:" . $ano;


}
	echo exibir();
	echo exibir();
	echo exibir();






 ?>