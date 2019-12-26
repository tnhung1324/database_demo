<?php
$NAME = $_POST['Name'];
$SSN = $_POST['Ssn'];
$PHONE = $_POST['Phone'];
$S_ID = $_POST['S_id'];
$NAMEModify = $_POST['Name_modify'];
$SSNModify = $_POST['Ssn_modify'];
$PHONEModify = $_POST['Phone_modify'];
$S_IDModify = $_POST['S_id_modify'];
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "UPDATE `passenger` SET Ssn = '". $SSNModify."',Name = '". $NAMEModify."',
		Phone = '". $PHONEModify."',S_id = '". $S_IDModify."' WHERE Ssn = '". $SSN."' AND 
		Name = '". $NAME."' AND Phone = '". $PHONE."' AND S_id = '". $S_ID."'";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));
echo '修改成功'.'<br>';
?>


<form action = "passenger.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>