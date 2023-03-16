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
if ($result ==0) {
    echo "凶です";
} elseif ($result >= 1 and $result <= 3) {
    echo "小吉です";
} elseif ($result >= 4 and $result <= 6) {
    echo "中吉です";
} elseif ($result >= 7 and $result <= 8) {
    echo "吉です";
} else {
    echo "大吉です";
}
?>
<?php

?>
</p>
