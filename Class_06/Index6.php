<?php
	echo '<title> Sixth class of php project</title>';	
	
	/*On this class we wiil learn how to declare arrays. They are variables but with various strings/values mixed.
		There are tree different ways to declare them, the first and oldest one:*/

		$values = array('First value','Second value','Third value');
	
	/* And for printing it on screen we do the following.*/
		
		echo $values[0]; echo "&nbsp";
		echo $values[1]; echo "&nbsp";
		echo $values[2]; echo "<br/>";
	
	/* Second way of declaring an array:*/

		$Value2[] = 'Some string or other function here.';
		$Value2[] = 'Just keeping trying.';	
		echo $Value2[0]; echo '&nbsp';
		echo $Value2 [1]; echo '<br/>';

	//You can also choose the key value://
			$Chosing [10] = 'In this example I set the number of the key which i prefered.';
			echo $Chosing[10]; echo '<br/>';

	// The newest way of declaring a variable is the following://
			$Variables = ['Fourth value.', 'Fifth value.', true];
			echo $Variables [0]; echo '&nbsp';
			echo $Variables [1]; echo '&nbsp';
			echo $Variables [2]; echo '.'; echo '<br/>';

	// Also, you can use strings into the keys to set their values, for example://
			$Last['myname'] = 'Breno Rodrigues';
			$Last['myage'] = '20';	
			$Last['mycity'] = 'Dublin';

			echo $Last ['myname']; echo '<br/>';	
			echo $Last ['myage']; echo '<br/>';
			echo $Last ['mycity']; echo '<br/>';





 ?>