<?php
include(APP_DIR . "/modules/header.php");
?>

<h1>Login</h1>
<form method="post">
<input type="hidden" name="redirect" value="<?=$_GET['redirect']; ?>" />
Username <input type="text" name="username" value="<?=$_POST['username']; ?>" /><br />
Password <input type="password" name="password" value="" /><br />
<input type="submit" value="Login" name="login" />
</form>

<?php
include(APP_DIR . "/modules/footer.php");
?>