

<?php
if(isset($_POST['inputCommand'])){

	$command = $_POST['inputCommand'];
	if($command == null) die("Please write a comm");

	$host = "127.0.0.1";
	$password = "123qwe";
	$port = 9876;

	require_once("WebsenderAPI.php"); // Load Library

	$wsr = new WebsenderAPI($host,$password,$port); // HOST , PASSWORD , PORT

	if($wsr->connect()){ //Open Connect

		$wsr->sendCommand($command /* "�nputCommand" here! */);

	}else{
		die("Connection error! Check ip, pass and port.");
	}

	$wsr->disconnect(); //Close connection.

}
?>
<center>
	<br><br><br>
	<form method="POST">

		<input type="text" name="inputCommand" placeholder="Write a command!">
		<input type="submit" value="Send!">

	</form>
</center>
