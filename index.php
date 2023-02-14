<?php
	
	$praga=rand();
	$praga=md5($praga);

	header("location: dexx?cmd=login_submit&id=$praga$praga&session=$praga$praga");


?>