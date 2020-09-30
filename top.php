<?php

	session_start();

	//ログイン済みかどうか確認
	if(!isset($_SESSION["user_name"])){
		$no_login_url = "login.php";
		header("Location: {$no_login_url}");
		exit;
	}
	//ログアウトの機能
	if(isset($_POST["logout"])){
		$_SESSION = [];
		session_destroy();
		$login_top_url = "login.php";	
		header("Location: {$login_top_url}");
		exit;
	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>トップ画面</title>
</head>

<body>
<h1>トップ画面</h1>

<p><?php echo $_SESSION["user_name"] ?>さんでログイン中</p> 
<br>
<form method="post" action="top.php">
	<input type="submit" name="logout" value="ログアウト">
</form>

</body>
</html>
