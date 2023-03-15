<?php
$my_number = $_GET['my_number'];
?>
<p>
<?php
echo date("Y/m/d", time());
?>
の運勢は<br>

<?php
$num_array = str_split($my_number);
$num_key = array_rand($num_array,1);
$result = $num_array[$num_key];
?>
選ばれた数字は
<?php echo $result?>
<br>
<?php
if ($str ==0) {
    echo "凶です";
} elseif ($num_array >= 1 and $num_key <= 3) {
    echo "小吉です";
} elseif ($num_array >= 4 and $num_key <= 6) {
    echo "中吉です";
} elseif ($num_array >= 7 and $num_key <= 8) {
    echo "吉です";
} else {
    echo "大吉です";
}
?>
<?php

?>
</p>
