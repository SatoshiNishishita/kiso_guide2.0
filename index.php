<?php
//アプリのトップページのphpファイル
?>

<?php
//データベースに接続
require('dbconnect.php');

// MySQLとの接続をオープンにする
$db = mysql_connect($DBSERVER, $DBUSER, $DBPASSWORD) or die(mysql_error());

// データをUTF8で受け取る
mysql_query("SET NAMES UTF8");

// データベースを選択する
$selectdb = mysql_select_db($DBNAME, $db);
?>

<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>社会科見学学習アプリ</title>
	
	<!-- Bootstrap-->
	<meta name="viewport" content="initial-scale=1.0, user-scale=no" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<!--css-->
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
	<div class="text-center">
		<h2>木曽三川公園がくしゅうガイド</h2><br/>
		<h3>現地に住む人のかいせつを聞いてクイズにチャレンジしよう</h3>
	</div>
</header>


<br />


<div class="container">
	<ul class="nav nav-justified">
		<li><a href="../kiso_guide2.0">ホーム</a></li>
		<li><a href="spot.php?id=1">農家と水屋(のうかとみずや)</a></li>
		<li><a href="spot.php?id=2">治水タワー(ちすいタワー)</a></li>
		<li><a href="spot.php?id=5">治水神社(ちすいじんじゃ)</a></li>
		<li><a href="spot.php?id=6">締切堤(しめきりてい)</a></li>
		<li><a href="spot.php?id=8">資料館(しりょうかん)</a></li>
	</ul><br />

	<div class="text-center">
	<div class="col-xs-6">
		<button1 type="button" onclick="location.href= 'map.php'"><img src="icon/pencil.png" width="200px" height="200px"><br/>学ぶ</button>
	</div>
	<div class="col-xs-6">
		<button2 type="button" onclick="location.href= 'quest.php?id=1'"><img src="icon/quiz.png" width="200px" height="200px"><br/>クイズ</button>
	</div>
	</div>

</div>

<br />
<br />
<br />

<footer>
	<h4 class="text-center">&copy;YESLab, Nagoya University</h4>
</footer>

</body>
</html>

