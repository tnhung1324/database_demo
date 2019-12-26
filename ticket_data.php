<?php
$SSN = $_POST['Ssn_input'];
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}
mysqli_select_db($connect, $database) or die("未找到資料庫：" . mysqli_error()) . '<br>';
$connect->query("SET NAMES 'utf8'");
$query = "SELECT 班次,日期,時間,座位,Ssn,S_id,票價,起始站,終點站,旅客姓名 FROM ticket WHERE Ssn LIKE $SSN";
$result = $connect->query($query);

if(!$result) die ("Database access failed: " . mysqli_error($connect));

function mysqli_result($res, $row, $field) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}

$rows = mysqli_num_rows($result);
for($j = 0;$j < $rows;++$j){
	echo '班次:' . mysqli_result($result,$j,'班次') . '<br>';
	echo '日期:' . mysqli_result($result,$j,'日期') . '<br>';
	echo '時間:' . mysqli_result($result,$j,'時間') . '<br>';
	echo '座位:' . mysqli_result($result,$j,'座位') . '<br>';
	echo 'Ssn:' . mysqli_result($result,$j,'Ssn') . '<br>';
	echo 'S_id:' . mysqli_result($result,$j,'S_id') . '<br>';
	echo '票價:' . mysqli_result($result,$j,'票價') . '<br>';
	echo '起始站:' . mysqli_result($result,$j,'起始站') . '<br>';
	echo '終點站:' . mysqli_result($result,$j,'終點站') . '<br>';
	echo '旅客姓名:' . mysqli_result($result,$j,'旅客姓名') . '<br><br>';
}

?>

<form action = "ticket.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>