<?php
	$con = new mysqli("localhost","root","","nivelk");
		if($con->connect_error){
			die("Erro no banco da Nivelk");
		}
?>