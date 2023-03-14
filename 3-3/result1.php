<?php
$my_number = $_GET['my_number'];
?>


<?php
$my_number = "0123456789";
$num_array = str_split($my_number);
$array = ['0'=>'凶','0~3'=>'小吉','4~6'=>'中吉','7~8'=>'吉','9'=>'大吉'];
$num_key = array_rand($num_arr,2);
$result = $num_arr[$num_key];
?>
<?php
$msg = '小吉'
if (凶の場合の条件) {
    $msg = "凶";
    echo "凶です";
} elseif (小吉の場合の条件) {
    $msg = "小吉";
    echo "小吉です";
} elseif (中吉の場合の条件) {
    $msg = "中吉";
    echo "中吉です";
} elseif (吉の場合の条件) {
    $msg = "吉";
    echo "吉です";
} else {
    $msg = "大吉";
    echo "大吉です";
}
?>
<?php
echo strtotime("1970/8/24 13:31:51");
<p>の運勢は</p>
?>

