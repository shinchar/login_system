<?php
	
	session_start(); //1 セッション開始の宣言。phpでセッションを使用する時に使う

 //ログイン済みか確認
 //ログイン機能
 	$message = "";
	if(isset($_POST["login"])){ //2 name='login'のボタンが押された値があるかどうかチェック
			//3 ログイン合否の判定 
		//if($_POST['email'] == 'login@example.com' && $_POST['password'] == 'psssword'){
		if($_POST["user_name"] == "user" && $_POST["password"] == "password"){
			//4 ログイン成功の処理
			$_SESSION["user_name"] = $_POST["user_name"];
			$login_success_url = "top.php";
			header("Location: {$login_success_url}");
			exit;
		}else{
			//5 ログイン失敗の処理
			//  表示用の文字列messageに失敗の文章を格納
			$message = 'IDとパスワードの組み合わせが違います';
		}
	}
			
?>

<!DOCTYPE html>
<html>
<head>
	<title>ログイン機能</title>
</head>

<body>
<h1>ログイン機能</h1>

<p style="color: red"><?php echo $message ?></p> <!-- 6 ログイン失敗のエラー文表示-->
<form method="post" action="login.php">
	<p>ログインID：<input type="text" name="user_name"></p>
	<!--
	<label for="email">メールアドレス</label>
	<input id="email" type="email" name="email">
	-->
	<br>
	<label for="password">パスワード</label>
	<input id="password" type="password" name="password">
	<br>
	<input type="submit" name="login" value="ログイン">
</form>

</body>
</html>
	
