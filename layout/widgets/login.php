	<h3>Account Management</h3>
		<form action="login.php" method="post">
		<ul>
			<li>
				Userame: <br>
				<input type="text" name="username">
			</li>
			<li>
				Password: <br>
				<input type="password" name="password">
			</li>
			<li>
				<input type="submit" value="Log in">
			</li>
			<?php
				/* Form file */
				Token::create();
			?>
		</ul>
		</form>