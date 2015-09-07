<?php

	$first_name = "Raiko";
	$last_name = "Lepik";

	//trükib välja
	echo $first_name." ".$last_name;

?>

<br>

<?php

	$age = 19;
	
	// if (loogikatehe) ){tõene} else (väär)
	if($age < 19) { 
		echo "vana";
		
		
	} else {
		echo "täisealine";
	}	


?>

<?php

	for($i = 0; $i < $age; $i = $i + 1) {
			//See, mida korratake
			echo "palju".$i.", ";
	}
	echo "õnne";
	


?>
<br>


<?php

	// Kuupäev - date 
	
	echo date ("l, j F Y e");



