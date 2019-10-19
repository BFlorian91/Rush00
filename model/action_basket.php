<?php
	session_start();

	function add_item($item)
	{
		echo $_SESSION['loggued_on_user']."\n";
	}


	if ($_POST['submit'] == "add to card")
		add_item($_POST['ref']);
	header("location: ../index.php");
?>