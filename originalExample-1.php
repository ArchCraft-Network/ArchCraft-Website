<?php

	require_once("WebsenderAPI.php"); // Load Library

	$wsr = new WebsenderAPI("37.187.156.107","123qwe","9876"); // HOST , PASSWORD , PORT

	if($wsr->connect()){ //Open Connect

		$wsr->sendCommand("gamemode 0 Rub_T");
		$wsr->sendCommand("say test");
		$wsr->sendCommand("perms");

	}else{
		echo "Connection error! Check ip, pass and port.";
	}

	$wsr->disconnect(); //Close connection.

?>
