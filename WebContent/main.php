<?php
	require_once 'functions.php';

	if(isset($_POST['submit']))
	{
		if(is_numeric($_POST['age']) && is_numeric($_POST['height']) && is_numeric($_POST['weight']))
		{
			$data 	= return_array($_POST['name'],$_POST['age'],$_POST['height'],$_POST['weight']);		
			echo renderPhpFile('bmi.php',$data);
		}
		else
		{
			echo "<p>ENTER CORRECT VALUES</p>";
			echo renderPhpFile('login.php');

		}
	}
	else
	{	
		echo renderPhpFile('login.php');
	}
?>