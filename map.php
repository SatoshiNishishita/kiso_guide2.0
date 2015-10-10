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
$recordSet = mysql_query('SELECT * FROM kiso_spot',$db);
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
	<link href="">
</head>

<body>

<header>
ヘッダー
</header>

<br />
<br />
<br />


<div class="container">
	<div class="col-xs-8">
		<div class="text-center">
		ここに地図を入れる
		</div>
	</div>
	
	<!--スポットをリスト表示する-->
	<div class="col-xs-4">
		<?php
			//while分で$recordSetからデータベースのスポット情報を一つずつ取り出す
			while($data = mysql_fetch_assoc($recordSet)){
		?>
				<hr>
				
				<img src="icon/<?php echo $data[spot_icon]; ?>.jpg" class="img-responsive">
				<a href="spot.php?id=<?php echo $data['spot_id'];?>"><h4><?php echo $data['spot_name']; ?></h4></a>
				
				<hr>
				
		<?php
			}
		?>
	</div>


<div class="container">

<br />
<br />
<br />

<footer>
フッター
</footer>

</body>
</html>
