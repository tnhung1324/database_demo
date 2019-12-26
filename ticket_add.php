<?php
$B_ID = $_POST['B_id'];
$DATE = $_POST['Date'];
$TIME = $_POST['Time'];
$SEAT = $_POST['Seat'];
$SSN = $_POST['Ssn'];
$S_ID = $_POST['S_id'];
$PRICE = $_POST['Price'];
$START = $_POST['start_station'];
$END = $_POST['end_station'];
$NAME = $_POST['Name'];

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "INSERT INTO `ticket`(`班次`,`日期`,`時間`,`座位`,`Ssn`,`S_id`,`票價`,`起始站`,`終點站`,`旅客姓名`) 
			VALUES('". $B_ID."','". $DATE."','".$TIME."','". $SEAT."','". $SSN."','". $S_ID."','". $PRICE."',
			'". $START."','". $END."','". $NAME."')";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));
echo '新增成功'.'<br>';
?>


<form action = "ticket.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>