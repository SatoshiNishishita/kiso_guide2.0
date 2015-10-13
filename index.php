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
</head>

<body>

<header>
	<div class="text-center">
		<h2>木曽三川公園がくしゅうガイド</h2><br />
		<h4>現地に住む人のかいせつを聞いてクイズにチャレンジしよう</h4>
	</div>
</header>


<br />
<br />
<br />

<div class="container">
	<ul class="nav nav-justified">
		<li><a href="../kiso_guide2.0">ホーム</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
	</ul>
	<br />

	<div class="text-center">
	<div class="col-xs-6">
		<button type="button" onclick="location.href= 'map.php'">学ぶ</button>
	</div>
	<div class="col-xs-6">
		<button type="button" onclick="location.href= 'quest.php?id=1'">クイズ</button>
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

