<?php
$Start = $_POST['start_station'];
$End = $_POST['end_station'];
$Price = $_POST['price'];
$StartModity = $_POST['start_modify'];
$EndModity = $_POST['end_modify'];
$PriceModity = $_POST['price_modify'];
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "UPDATE `ticket price` SET 起始站 = '". $StartModity."',終點站 = '". $EndModity."',
		票價 = '". $PriceModity."' WHERE 起始站 = '". $Start."'AND 終點站 = '". $End."' AND
		票價 = '". $Price."' ";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));
echo '修改成功'.'<br>';
?>


<form action = "ticket_price.php">
<input type = "submit" value = "返回上一頁">
</form>

<form action = "bus.php">
<input type = "submit" value = "回首頁">
</form>