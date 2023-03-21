<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
	$Ans1 = $_POST['Ans1'];
	$Ans2 = $_POST['Ans2'];
	$Ans3 = $_POST['Ans3'];
	$correctAns1 = $_POST['correctAns1'];
	$correctAns2 = $_POST['correctAns2'];
	$correctAns3 = $_POST['correctAns3'];
  
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkAnswer($Ans, $correctAns)
{
	if ($Ans === $correctAns) {
			echo "正解！";
	} else {
			echo "残念・・・";
	}
}

<p><?php echo $name ?>yutoさんの結果は・・・？</p>
<p>①の答え</p>
$correctAns1 = ["80","22","20","21"];
echo $Ans1 = [0]
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
$correctAns2  = ["PHP","Python","JAVA","HTML"];
echo $Ans2 = [3];
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
$correctAns3  = ["join","select","insert","update"];
echo $Ans3 = [1];