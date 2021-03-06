<?php
//アプリのspotページのphpファイル
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
$recordSetMovie = mysql_query("SELECT * FROM kiso_movie WHERE  movie_boolean=1 AND spot_id='$id'", $db);
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
	<link href="css/spotstyle.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
	<div class="text-center">
	<div id="box" class="col-xs-8">
	<br />
	<br />
		<h2><?php echo $data['spot_name'];?></h2><br />

		<h4><?php echo $data['spot_text'];?></h4>
	</div>
<br />
	<div class="col-xs-3">
		<div id="photoimg"><img src="photo/<?php echo $data['spot_photo'];?>.jpg"width="100%"></div>
	</div>
	<div class="col-xs-1">
	</div>
	</div>

</header>

<div class="container">
	<ul class="nav nav-justified">
		<li><a href="../kiso_guide2.0">ホーム</a></li>
		<li><a href="spot.php?id=1">農家と水屋(のうかとみずや)</a></li>
		<li><a href="spot.php?id=2">治水タワー(ちすいタワー)</a></li>
		<li><a href="spot.php?id=5">治水神社(ちすいじんじゃ)</a></li>
		<li><a href="spot.php?id=6">締切堤(しめきりてい)</a></li>
		<li><a href="spot.php?id=8">資料館(しりょうかん)</a></li>
	</ul><br />

	<div class="text-left">
		<?php
			while($movie_data = mysql_fetch_assoc($recordSetMovie)){
		?>
			<div id="movie" class="col-xs-6">
				<h3><img src="icon/movie.png" width=10% class="img-responsive"><?php echo $movie_data['movie_title'];?></h3>
				<hr>
				<a href="play.php?id=<?php echo $movie_data['movie_id'];?>">
				<img src="movie_photo/<?php echo $movie_data['movie_img'];?>.jpg" class="img-responsive" width="100%">
				</a>
				<br />
				<br />

			</div>
		<?php
			}
		?>
	</div>
</div>
<br />
<br />

<footer>
	<h4 class="text-center">&copy;YESLab, Nagoya University</h4>
</footer>

</body>
</html>
