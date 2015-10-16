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
$recordSet = mysql_query('SELECT * FROM kiso_spot WHERE spot_boolean =1',$db);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>スポット一覧</title>
	
	<!-- Bootstrap-->
	<meta name="viewport" content="initial-scale=1.0, user-scale=no" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

	<!--css-->
	<link href="css/mapstyle.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
	<div class="text-center">
		<h2>木曽三川公園がくしゅうガイド</h2>
		<h4>木曽三川公園のおすすめのスポットをしらべよう</h4>
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

	<div class="col-xs-8">
		<div class="text-center">
		 <div id="map"><img src="photo/map.png" class="img-responsive" width="100%"></div>
		</div>
	</div>
	
	<!--スポットをリスト表示する-->
	<div class="col-xs-4">
	<h3 class="text-center">スポットリスト</h3><br />

		<?php
			//while分で$recordSetからデータベースのスポット情報を一つずつ取り出す
			while($data = mysql_fetch_assoc($recordSet)){
		?>
		
				
				<img src="icon/<?php echo $data[spot_icon]; ?>.png" class="img-responsive"style="float:left">
				<a href="spot.php?id=<?php echo $data['spot_id'];?>"><h4><?php echo $data['spot_name']; ?></h4></a>&nbsp;
				
				<hr>
				
		<?php
			}
		?>
	</div>


</div>

<br />

<footer>
	<h4 class="text-center">&copy;YESLab, Nagoya University</h4>
</footer>

</body>
</html>
