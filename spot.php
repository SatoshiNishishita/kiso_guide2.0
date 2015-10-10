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
//map.phpからIDを受け取る
$id = $_GET['id'];

//受け取ったIDのspot_idのspot情報をデータベースから受け取る
$recordSet = mysql_query("SELECT * FROM kiso_spot WHERE spot_id ='$id'",$db);
$data = mysql_fetch_assoc($recordSet);

//受け取ったIDのspot_idと関係ある動画をkiso_movieから受け取る
$recordSetMovie = mysql_query("SELECT * FROM kiso_movie WHERE  spot_id='$id'", $db);
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
	<div class="text-center">
	<div class="col-xs-8">
		<h2><?php echo $data['spot_name'];?></h2><br />
		<h4><?php echo $data['spot_text'];?></h4>
	</div>
	
	<div class="col-xs-4">
		<img src="photo/<?php echo $data['spot_photo'];?>.jpg"width="100%">
	</div>
	</div>

</header>

<br />
<br />
<br />

<div class="container">
	<div class="text-center">
		<?php
			while($movie_data = mysql_fetch_assoc($recordSetMovie)){
		?>
			<div class="col-xs-6">
				<h3><?php echo $movie_data['movie_title'];?></h3><br /><br />
				<a href="play.php?id=<?php echo $movie_data['movie_id'];?>">
					<img src="movie_photo/<?php echo $movie_data['movie_img'];?>.jpg" class="imv-responsive" width="100%">
				</a>

			</div>
		<?php
			}
		?>
	</div>

</div>
<br />
<br />
<br />
<br />

<footer>
フッター
</footer>

</body>
</html>
