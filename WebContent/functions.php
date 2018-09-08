<?php 

//PLEASE USE ECHO WHILE CALLING THIS FUNCTION
function renderPhpFile($filename, $data = null)
		{
  			if (is_array($data) && !empty($data)) 
  			{		
  				extract($data);
  			}

  			ob_start();
  			include $filename;
  			return ob_get_clean();
		}
//BMI FORMULA SHOULD BE WRITTEN
function bmi_calculation($height ,$weight)
		{
			return $height/$weight;
		}
//RETURNS THE ARRAY
function return_array($name,$age,$height,$weight)
		{

		return array(
			    'name' 		=> $name,
			    'age' 		=> $age,
			    'height' 	=> $height,
			    'weight' 	=> $weight,
			    'bmi'		=> bmi_calculation($height ,$weight)
			);
		}
?>
