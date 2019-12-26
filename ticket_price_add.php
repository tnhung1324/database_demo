<?php
$Start = $_POST['start_station'];
$End = $_POST['end_station'];
$Price = $_POST['price'];
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "INSERT INTO `ticket price`(`起始站`,`終點站`,`票價`) VALUES('". $Start."','". $End."','". $Price."')";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));
echo '新增成功'.'<br>';
?>


<form action = "ticket_price.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>