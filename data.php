<?php

	require("functions.php");
	
	//kui ei ole kasutaja id'd
	if (!isset($_SESSION["userId"])) {
		
		//suunan sisselogimise lehele
		header("Location: login.php");
		
	}

	//kui on ?logout aadressi real siis login välja
	if(isset ($_GET["logout"])) {
		
		session_destroy();
		header("Location:login.php");
	}




?>

<h1>Data</h1>

<p> Tere tulemast <?=$_SESSION["userEmail"];?>!</p>
<a href="?logout=1"> Logi välja </a>