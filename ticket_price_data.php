<?php
$Start = $_POST['start'];
$End = $_POST['end'];
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "SELECT 起始站,終點站,票價 FROM `ticket price` WHERE 起始站 LIKE '". $Start."' AND 終點站 LIKE '". $End."'";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));

function mysqli_result($res, $row, $field) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}

$rows = mysqli_num_rows($result);
for($j = 0;$j < $rows;++$j){
	echo '起始站:' . mysqli_result($result,$j,'起始站') . '<br>';
	echo '終點站:' . mysqli_result($result,$j,'終點站') . '<br>';
	echo '票價:' . mysqli_result($result,$j,'票價') . '<br>';
}

?>


<form action = "ticket_price.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>