<?php
//クイズのページ
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
	<title>木曽三川クイズ</title>

	<!--css-->
	<link href="">
</head>

<body>

<header>
</header>

<p>Q</p>
<p>A</p>

<footer>
</footer>

</body>
</html>
