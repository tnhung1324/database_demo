<?php
$B_ID = $_POST['B_id'];
$DATE = $_POST['Date'];
$TIME = $_POST['Time'];
$SEAT = $_POST['Seat'];
$SSN = $_POST['Ssn'];

$B_IDModity = $_POST['B_id_modify'];
$DATEModity = $_POST['Date_modify'];
$TIMEModity = $_POST['Time_modify'];
$SEATModity = $_POST['Seat_modify'];
$S_IDModity = $_POST['S_id_modify'];
$StartModity = $_POST['start_station_modify'];
$EndModity = $_POST['end_station_modify'];
$PriceModity = $_POST['Price_modify'];

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "UPDATE `ticket` SET 班次 = '". $B_IDModity."',日期 = '". $DATEModity."',
			時間 = '". $TIMEModity."',座位 = '". $SEATModity."',S_id = '". $S_IDModity."',
			票價 = '". $PriceModity."' ,起始站 = '". $StartModity."' ,終點站 = '". $EndModity."' 
			WHERE 班次 LIKE '". $B_ID."' AND 日期 LIKE '". $DATE."' AND  時間 LIKE '". $TIME."' AND 
			座位 LIKE '". $SEAT."' AND Ssn LIKE '". $SSN."'";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));
echo '修改成功'.'<br>';
?>


<form action = "ticket.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>