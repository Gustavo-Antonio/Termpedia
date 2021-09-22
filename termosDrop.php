<?php

require_once 'global.php';

try{

	header("Location: ./area-restrita/excluirTermos.php");
	$oTermo = new Termo();

	$termo = $_POST['termo'];
	$oTermo->setIdTermo($termo);
	echo($oTermo->excluir($oTermo));


}catch(Exception $e){
	echo '<pre>';
	print_r($e);
	echo '</pre';
	echo $e->getMessage();
}


?>