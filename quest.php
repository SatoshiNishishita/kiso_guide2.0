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
$id = $_GET['id'];
$recordSet = mysql_query("SELECT * FROM kiso_question WHERE question_id = '$id'", $db);
$data = mysql_fetch_assoc($recordSet);

?>





<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>木曽三川クイズ</title>
	
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
		<h2>木曽三川公園クイズ</h2><br />
		<h4>クイズは全部で5問！！全問正解できるかな</h4>
	</div>
</header>
<div class="container">

<div class="col-xs-1">
</div>
<div class="col-xs-10">
	<ul class="nav nav-justified">
		<li><a href="../kiso_guide2.0">ホーム</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
		<li><a href ="spot.php">各スポット</a></li>
	</ul><br />


		 		<div>
		 			<h2 class="text-center"><?php echo $data['question_title'];?></h3><br />
		 			<h3><?php echo $data['question_q'];?></h3><br />
		 			<img src="photo/<?php echo $data['question_img'];?>.jpg" class="img-responsive">
		 			<form action="quest.php" method="get">
		 				<input type="hidden" name="id" value="<?php echo $data['question_id'];?>">
		 				<input type="submit" name="name" value="<?php echo $data['answer1'];?>">
		 				<input type="submit" name="name" value="<?php echo $data['answer2'];?>">
		 				<input type="submit" name="name" value="<?php echo $data['answer3'];?>">
		 			</form>
		 			<hr>
		 			<br /><br />

		 		</div>
		 		
		 		<div>
		 			<?php
		 			//クイズの答えの取得
					if($_GET['name']){	
						$answer = $_GET['name'];				 		
		 				if ($answer == $data['answer_fa']){
		 			?>		<p>正解の画像</p>
		 					 <button type="button" onclick="location.href='quest.php?id=<?php echo mt_rand(1,5);?>>'">次の問題へ</button>
		 				<?php
		 					}else{
		 				?>
		 					<p>不正解の画像</p>
		 					<p><?php echo $data['quest_text'];?></p>
		 					<button type="button" onclick="location.href='quest.php?id=<?php echo mt_rand(1,5);?>>'">次の問題へ</button>	
		 				<?php
		 					}
		 				?>
		 			<?php
		 			}
		 			?>
		 			
		 	 </div>
<div class="col-xs-1">
</div>

</div>

<footer>
	<h4 class="text-center">&copy;YESLab, Nagoya University</h4>
</footer>
</body>
</html>
