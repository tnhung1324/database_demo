<?php
$NAME = $_POST['Name'];
$SSN = $_POST['Ssn'];
$PHONE = $_POST['Phone'];
$S_ID = $_POST['S_id'];
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "DELETE FROM`passenger` WHERE Ssn LIKE '". $SSN."' AND Name LIKE '". $NAME."' 
			AND Phone LIKE '". $PHONE."' AND S_id LIKE '". $S_ID."'";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));
echo '刪除成功'.'<br>';
?>


<form action = "passenger.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>
