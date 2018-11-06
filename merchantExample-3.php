<center>
	<br><b>MERCHANT/STORE EXAMPLE</b><br><br><br><br>
	
	<?php
	if(isset($_POST['buyItem']) && isset($_POST['playerName'])){
		
		$itemID = $_POST['buyItem'];
		$playerName = $_POST['playerName'];
		
		if($itemID == null) die("Please select a item!");
		if($playerName == null) die("Please write a playername!");
				
		require_once("WebsenderAPI.php"); // Load Library
		
		$host = "127.0.0.1"; $password = "123qwe"; $port = 9876;
		$wsr = new WebsenderAPI($host,$password,$port); // HOST , PASSWORD , PORT
		
		if($wsr->connect()){ //Open Connect
			
			echo "<b>$itemID item purchased!</b><br><br>";
			
			if($itemID == "Chest") $itemName = "chest";
			elseif($itemID == "IronSword") $itemName = "iron_sword";
			elseif($itemID == "ChestPlate") $itemName = "iron_chestplate";
			else die("This not a item!");
			
			$wsr->sendCommand("give $playerName $itemName 1");
			
		}else{
			echo "<b>ERROR: Connection error! Check ip, pass and port.</b><br><br>";
		}
		
		$wsr->disconnect(); //Close connection.
	}
	?>
	<form method="POST">

		PLAYERNAME: <input type="text" name="playerName" value="Uvuvuve"><br><br>
		SELECT ITEM:<br>
		<input type="submit" name="buyItem" value="ChestPlate">
		<input type="submit" name="buyItem" value="IronSword">
		<input type="submit" name="buyItem" value="Chest">

	</form>
</center>