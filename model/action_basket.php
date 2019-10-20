<?php
	include 'add_item.php';

	session_start();
	if (!file_exists("../private"))
		mkdir("../private", '0755');


	if ($_POST['submit'] == "add to card")
		add_item($_POST['ref']);
	echo "test\n";
	header("location: ../index.php");
?>