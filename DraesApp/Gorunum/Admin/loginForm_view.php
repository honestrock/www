<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr" xml:lang="tr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Admin Paneli</title>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="<?php echo SITE_URL; ?>/?url=admin/runLogin" method="post">
					<label for="login">Username:</label>
					<input id="login" name="username" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" name="Login" class="ok">Login</button>
				</form>
                            <a href="<?php echo SITE_URL; ?>/index.php?url=Admin/yeniUser"><button type="submit" name="AddUser" class="ok">Add User</button>
                            </a>
			</div>
			<div class="footer">&raquo; Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>