<?php
//クイズのページ
session_start();
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

if ($_GET['id'] == 0){
	$number =  range(1,5);
	shuffle($number);

	$_SESSION['session_number'] = $number;
	$_SESSION['session_id'] = 0;
}
?>

<?php

	//var_dump($_SESSION['session_number']);
	//var_dump($_SESSION['session_id']);
?>



<?php
$session_id = $_SESSION['session_id'];
//var_dump($session_id);
$i = $_SESSION['session_number'][$session_id];
$recordSet = mysql_query("SELECT * FROM kiso_question WHERE question_id = '$i'", $db);
//var_dump($i);
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
    <link href="css/queststyle.css" rel="stylesheet" type="text/css">
    
<!--トラッキングID-->	
<script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  	ga('create', 'UA-68916506-1', 'auto');
	ga('send', 'pageview');
</script>
    
		
</head>

<body>

<header>
	<div class="text-center">
		<h2>木曽三川公園クイズ</h2>
		<h4>クイズは全部で5問！！全問正解できるかな</h4>
	</div>
</header>
<br />
<div class="container">

<div class="col-xs-1">
</div>
<div class="col-xs-10">
	<ul class="nav nav-justified">
		<li><a href="../kiso_guide2.0">ホーム</a></li>
		<li><a href="spot.php?id=1">農家と水屋(のうかとみずや)</a></li>
		<li><a href="spot.php?id=2">治水タワー(ちすいタワー)</a></li>
		<li><a href="spot.php?id=5">治水神社(ちすいじんじゃ)</a></li>
		<li><a href="spot.php?id=6">締切堤(しめきりてい)</a></li>
		<li><a href="spot.php?id=8">資料館(しりょうかん)</a></li>
	</ul><br />
<div>
		 			<?php
		 			//クイズの答えの取得
					if($_GET['name']){	
						$answer = $_GET['name'];	 		
		 				if ($answer == $data['answer_fa']){
		 					$_SESSION['session_id'] ++;
	 						if($_SESSION['session_id'] == 5){
		 			?>		<img src="icon/hanamaru.png" width="100px" height="100px">　正解！
		 					<button type="button" onclick="location.href='kekka.php'">結果へ</button><br />
		 			<?php		
		 					}else{
		 			?>		<img src="icon/hanamaru.png" width="100px" height="100px">　正解！
		 					<button type="button" onclick="location.href='quest.php?id=1'">次の問題へ</button><br />
		 			<?php
		 					}
		 				}else{
		 				?>
		 					<?php $_SESSION['session_id'] ++;?>
		 					<img src="icon/mark_batsu.png" width="100px" height="100px"> 不正解！
		 					<p><?php echo $data['quest_text'];?></p>
		 					<button type="button" onclick="location.href='quest.php?id=1'">次の問題へ</button><br />
		 				<?php
		 					}
		 				?>
		 			<?php
		 			}
		 			?>		 			
		 	 </div>

<br />
		 		<div class="col-xs-4">

		 			<h5 class="text-center"><?php echo $data['question_title'];?></h5><br />
		 			<div id="photoimg"><img src="photo/<?php echo $data['question_img'];?>.jpg"class="img-responsive"></div>
		 			</div>
		 		<div class="col-xs-1">
		 		   </div>
	 			<div class="col-xs-7">
		 			<h3>Q.<?php echo $data['question_q'];?></h3>
		 			<h3>A.
		 			<br /><br />
		 			<form action="quest.php" method="get">
		 				<input type="hidden" name="id" value="1"> 
		 				<input type="submit" name="name" value="<?php echo $data['answer1'];?>"><br />
		 				<input type="submit" name="name" value="<?php echo $data['answer2'];?>"><br />
		 				<input type="submit" name="name" value="<?php echo $data['answer3'];?>"><br />
		 			</form>
                         
		 			<br />

		 		</div>
		 		
		 			</div>
		 			
	<div  class="col-xs-1">
</div>

</div>
<br />
<footer>
	<h4 class="text-center">&copy;YESLab, Nagoya University</h4>
</footer>
</body>
</html>