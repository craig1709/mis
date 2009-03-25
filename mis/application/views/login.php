<h2>Login</h2>

<form action="<?php url::current(); ?>" method="post">
	<?php echo (isset($error_message)) ? '<p class="error_message">' . $error_message . '</p>' : ''; ?>
	<p><label for="username">Username</label><input type="text" name="username" id="username"></p>
	<p><label for="password">Password</label><input type="password" name="password" id="password"></p>
	<p><label>&nbsp;</label><input type="submit" value="Login"></p>
</form>
