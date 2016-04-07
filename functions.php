<?php

	require_once("../../../config.php");
	

	function signup($user, $pass){
		
		
		//GLOBALS - access outside variable in function
		$mysql = new mysqli("localhost", $_GLOBALS["db_username"], $_GLOBALS["$db_password"], "webpr2016_shikter");
		
		$stmt = $mysql->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
		
		echo $mysql->error;
		
		$stmt->bind_param("ss", $user, $pass);
		
		if($stmt->execute()){
			echo "user saved successfully!";
		}else{
			echo $stmt->error;
		}
	}
	
	
	
	
	/*
	$name = "Vadim";

	//hello($name, "You looks good ! ");
	hello("Romil", "Thursday", 7);

	function hello($recieved_name, $day_of_the_week, $day){
		echo "hello ".$recieved_name."!";
		echo "<br>";
		echo "Today is ".$day_of_the_week." ".$day;
	}
	*/

?>