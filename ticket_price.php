路線參考<br>
<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'bus';
$connect = mysqli_connect($host, $user, $passwd, $database);
if (!$connect){
	die("連線失敗：" . mysqli_error()) . '<br>';
}

mysqli_query($connect,"SET NAMES 'utf8'");
$query = "SELECT * FROM `ticket price`";
$result = mysqli_query($connect, $query );

if(!$result) die ("Database access failed: " . mysqli_error($connect));

function mysqli_result($res, $row, $field) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}

$rows = mysqli_num_rows($result);
for($j = 0;$j < $rows;++$j){
	echo '起始站:' . mysqli_result($result,$j,'起始站');
	echo ' , 終點站:' . mysqli_result($result,$j,'終點站') . '<br>';
}
?><br>

查詢票價：<br>
<form action = "ticket_price_data.php" method = "post">
 輸入起始站：
<input type = "text" name = "start"><br>
輸入終點站：
<input type = "text" name = "end"><br>
<input type = "submit" value = "確定">
</form>
 
新增票價：<br>
<form action = "ticket_price_add.php" method = "post">
輸入起始站：
<input type = "text" name = "start_station"><br>
輸入終點站：
<input type = "text" name = "end_station"><br>
輸入票價：
<input type = "text" name = "price"><br>
<input type = "submit" value = "確定">
</form>

修改票價：<br>
<form action = "ticket_price_modify.php" method = "post">
變更項目：<br>
輸入原起始站：
<input type = "text" name = "start_station"><br>
輸入原終點站：
<input type = "text" name = "end_station"><br>
輸入原票價：
<input type = "text" name = "price"><br><br>

變更內容：<br>
輸入修改起始站：
<input type = "text" name = "start_modify"><br>
輸入修改終點站：
<input type = "text" name = "end_modify"><br>
輸入修改票價：
<input type = "text" name = "price_modify"><br>
<input type = "submit" value = "確定">
</form>

刪除票價：<br>
<form action = "ticket_price_del.php" method = "post">
輸入起始站：
<input type = "text" name = "start_station"><br>
輸入終點站：
<input type = "text" name = "end_station"><br>
輸入票價：
<input type = "text" name = "price"><br>
<input type = "submit" value = "確定"><br>
</form>

<form action = "bus.php">
<input type = "submit" value = "返回">
</form>