<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Response>
	<Gather action="input.php" numDigits="1">
		<Say>Welcome to our Company.</Say>
		<Say>For operating hours, please press 1.</Say>
		<Say>To speak to  agent, please press 2.</Say>
	</Gather>
	<!-- If the person does not typeanything prompt and try one more time. -->
	<Say>Sorry, I did not obtain your response.</Say>
	<Redirect>listener.php</Redirect>
</Response>
