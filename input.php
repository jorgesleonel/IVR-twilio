<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<Response>';
	$user_pushed = (int) $_REQUEST['Digits'];
	switch( $user_pushed ){
		case 1:
			echo '<Say>Our operating hours are 9 AM to 6 PM.</Say>';
			break;
		case 2:
			echo '<Gather action="extensions.php" numDigits="1">';
			echo "<Say>Please enter the extension of the person you want to speak to.</Say>";
			echo '<Say>Press 0 to go to  main menu</Say>';
			echo '</Gather>';
			echo "<Say>Apologies but i did not get your response.</Say>";
			echo '<Redirect method="GET">input.php?Digits=2</Redirect>';
			break;
		default:
			echo "<Say>Sorry but i do not understand this command.</Say>";
			echo '<Redirect>listener.php</Redirect>';
			break;
	}
	echo '</Response>';
?>
