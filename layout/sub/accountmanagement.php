<?php
	if (user_logged_in() === true) {
		header( 'Location: myaccount.php' ); 
	} else {
		include 'layout/widgets/login.php'; 
	}
?>