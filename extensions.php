<?php
	include("config.php");
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<Response>';
	$user_pushed = (int) $_REQUEST['Digits'];
	switch( $user_pushed ){
		case 0:
			echo '<Say>Going to main menu hang on</Say>';
			echo '<Redirect>listener.php</Redirect>';
			break;
		default:
			if( isset( $directory[$user_pushed] ) ){
				$agent = $directory[$user_pushed];
				echo '<Say>Connecting to '.$agent['firstname'].'.</Say>';
				echo '<Dial>'.$agent['phone'].'</Dial>';
			}else{
				echo "<Say>I do not know this extension number</Say>";
				echo '<Redirect method="GET">input.php?Digits=2</Redirect>';
			}
			break;
	}
	echo '</Response>';
?>
