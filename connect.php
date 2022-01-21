<?php 
	
	$con= new mysqli('localhost','root','','crudoo');
	if(!$con){
		
		die(mysqli_error($con));
	}

 ?>