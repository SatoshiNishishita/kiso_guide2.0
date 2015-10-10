<?php
//スポットの一覧が見える木曽三川公園のスポットページ
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
	<title>スポット一覧</title>

	<!--css-->
	<link href="">
</head>

<body>

<header>
</header>

<a href ="spot.php">スポットへ</a>

<footer>
</footer>

</body>
</html>
