<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。

$question = ["80","22","20","21"];
$question = ["PHP","Python","JAVA","HTML"];
$question = ["join","select","insert","update"];
?>
//② ①で作成した、配列から正解の選択肢の変数を作成してください
<?php
$correctAns1 = $question1[0];
$correctAns2 = $question2[3];
$correctAns3 = $question3[1];
?>

<p>お疲れ様です<!--POST通信で送られてきた名前を出力-->さん</p>
<p>名前:<?php echo $name ?>yutoさん</p>


<!--フォームの作成 通信はPOST通信で-->


<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<form action="answer.php" method="post">
		<h2>①ネットワークのポート番号は何番？</h2>
		<?php foreach ($q1 as $value1) { ?>
			<input type="radio" name="Ans1" value="<?php echo $value1;?>">
			<?php echo $value1; ?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php } ?>
		<br>
		<h2>②Webページを作成するための言語は？</h2>
		<?php foreach ($q2 as $value2) { ?>
			<input type="radio" name="Ans2" value="<?php echo $value2;?>">
			<?php echo $value2; ?>
    <?php } ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($q3 as $value3) { ?>
			<input type="radio" name="Ans3" value="<?php echo $value3;?>">
			<?php echo $value3; ?>
            <?php } ?>
		<br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="name"
			value="<?php echo $name; ?>" />
		<input type="hidden" name="correctAns1"
			value="<?php echo $correctAns1; ?>" />
		<input type="hidden" name="correctAns2"
			value="<?php echo $correctAns2; ?>" />
		<input type="hidden" name="correctAns3"
			value="<?php echo $correctAns3; ?>" />
		<input type="submit" value="回答する" />
	</form>


    


