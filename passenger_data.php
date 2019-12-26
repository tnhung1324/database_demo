<?php
$SSN = $_POST['Ssb_input'];
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
$query = "SELECT Ssn,Name,Phone,S_id FROM `passenger` WHERE Ssn LIKE '".$SSN."'";
$result = $connect->query($query);

if(!$result) die ("Database access failed: " . mysqli_error());

function mysqli_result($res, $row, $field) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}

$rows = mysqli_num_rows($result);
for($j = 0;$j < $rows;++$j){
	echo 'Ssn:' . mysqli_result($result,$j,'Ssn') . '<br>';
	echo 'Name:' . mysqli_result($result,$j,'Name') . '<br>';
	echo 'Phone:' . mysqli_result($result,$j,'Phone') . '<br>';
	echo 'S_id:' . mysqli_result($result,$j,'S_id') . '<br>';
}

?>

<form action = "passenger.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>