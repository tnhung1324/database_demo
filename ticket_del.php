<?php
$B_ID = $_POST['B_id'];
$DATE = $_POST['Date'];
$TIME = $_POST['Time'];
$SEAT = $_POST['Seat'];
$SSN = $_POST['Ssn'];

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "DELETE FROM`ticket` WHERE 班次 LIKE '". $B_ID."' AND 日期 LIKE '". $DATE."' AND 時間 LIKE '". $TIME."' 
			AND 座位 LIKE '". $SEAT."' AND Ssn LIKE '". $SSN."'";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));
echo '刪除成功'.'<br>';
?>


<form action = "ticket.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>