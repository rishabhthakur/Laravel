<?php 
if (isset($_POST['submit']))
	{ 

		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$operand = $_POST['operand'];

		$operand = $_POST['operand'];
		if ($operand = '+')
				echo $n1 + $n2;
				elseif ($operand= '-'){
				echo $n1 - $n2;
			}
			
			else
			{
			echo 'Unsesite brojeve i operanda';
		}
	}


 ?>