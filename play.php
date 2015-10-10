<?php
//アプリの動画自動再生用のファイル
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
//spot.phpからIDを受け取る
$id = $_GET['id'];

//受け取ったIDのmovie?idのmovie情報をデータベースから受け取る
$recordSet = mysql_query("SELECT * FROM kiso_movie WHERE movie_id ='$id'",$db);
$data = mysql_fetch_assoc($recordSet);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>木曽三川スポット</title>
	
	<!-- Bootstrap-->
	<meta name="viewport" content="initial-scale=1.0, user-scale=no" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<!--css-->
	<link href="">
</head>

<body>
<header>
</header>

<div class="container">

	<div class="text-center">
		<h3><?php echo $data['movie_title'];?></h3>
		<video src="movie/<?php echo $data['movie_path'];?>.mp4" poster="movie_photo/<?php echo $data['movie_img'];?>.jpg" width="100%" autoplay>
	</div>	

</div>


<footer>
</footer>

</body>
</html>
