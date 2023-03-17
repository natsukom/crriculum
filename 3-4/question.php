
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
<?php
$question = array(80,22,20,21);
$question = array(PHP,Python,JAVA,HTML);
$question = array(join,select,insert,update);
?>
//② ①で作成した、配列から正解の選択肢の変数を作成してください
<?php
$answer = array("80","22","20","21");
for($i = 0; $i < count($array); $i++){
echo $[$i];
echo "<br>";
}

$answer = array("PHP","Python","JAVA","HTML");
for($i = 0; $i < count($array); $i++){
echo $[$i];
echo "<br>";
}


$answer = array("join","select","insert","update");
for($i = 0; $i < count($array); $i++){
echo $[$i];
echo "<br>";
}
?>

<p>お疲れ様です<!--POST通信で送られてきた名前を出力-->さん</p>
<p>名前:<?php echo $name ?>yutoさん</p>


<!--フォームの作成 通信はPOST通信で-->


<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
$question = ["80","22","20","21"];
foreach ($question as $value) {
<input type="radio">
<?php echo $value;
}
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
$question = ["PHP","Python","JAVA","HTML"];
foreach ($question as $value) {
<input type="radio">
<?php echo $value;
}
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
$question = ["join","select","insert","update"];
foreach ($question as $value) {
<input type="radio">
<?php echo $value;
}
?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->

<?php foreach ($question as $value){ ?>
    <input type="radio" name="question" required="required" value="<?php echo $value; ?>" /><?php echo $value ?> 
    <br>
     } 
    <br>

    <input type="hidden" name="answer" value="<?php echo $answer?>">
    <input type="submit" value="回答する">
    


