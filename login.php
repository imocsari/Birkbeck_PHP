<?php
// simple login form

$username = 'admin';
$password = '1234';

if ( $_POST['username'] !== $username || $_POST['password'] !== $password ) { ?>

<h1>Member Login</h1>
<p>Please enter your credentials:</p>
<form name="form" method="post" action="content/DTresults.html">
	<p><label for="username">Username:</label><input type="text"     title="username" name="username" /></p>
	<p><label for="password">Password:</label><input type="password" title="password" name="password" /></p>
	<p><input type="submit" name="submit" value="Login" /></p>
</form>

<?php } else {

} ?>
