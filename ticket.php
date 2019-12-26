查詢車票
請輸入Ssn：
<form action = "ticket_data.php" method = "post">
<input type = "text" name = "Ssn_input">
<input type = "submit" value = "確定">
</form>

新增車票：<br>
<form action = "ticket_add.php" method = "post">
輸入班次：
<input type = "text" name = "B_id"><br>
輸入日期：
<input type = "date" name = "Date"><br>
輸入時間：
<input type = "text" name = "Time"><br>
輸入座位：
<input type = "text" name = "Seat"><br>
輸入Ssn：
<input type = "text" name = "Ssn"><br>
輸入服務人員S_ID：
<input type = "text" name = "S_id"><br>
輸入票價：
<input type = "text" name = "Price"><br>
輸入起始站：
<input type = "text" name = "start_station"><br>
輸入終點站：
<input type = "text" name = "end_station"><br>
輸入旅客姓名：
<input type = "text" name = "Name"><br>
<input type = "submit" value = "確定">
</form>

修改車票：<br>
<form action = "ticket_modify.php" method = "post">
變更項目：<br>
輸入原班次：
<input type = "text" name = "B_id"><br>
輸入原日期：
<input type = "date" name = "Date"><br>
輸入原時間：
<input type = "text" name = "Time"><br>
輸入原座位：
<input type = "text" name = "Seat"><br>
輸入原Ssn：
<input type = "text" name = "Ssn"><br><br>

變更內容：<br>
輸入修改班次：
<input type = "text" name = "B_id_modify"><br>
輸入修改日期：
<input type = "date" name = "Date_modify"><br>
輸入修改時間：
<input type = "text" name = "Time_modify"><br>
輸入修改座位：
<input type = "text" name = "Seat_modify"><br>
輸入修改服務人員S_ID：
<input type = "text" name = "S_id_modify"><br>
輸入修改票價：
<input type = "text" name = "Price_modify"><br>
輸入修改起始站：
<input type = "text" name = "start_station_modify"><br>
輸入修改終點站：
<input type = "text" name = "end_station_modify"><br>
<input type = "submit" value = "確定">
</form>

刪除車票：<br>
<form action = "ticket_del.php" method = "post">
輸入班次：
<input type = "text" name = "B_id"><br>
輸入日期：
<input type = "date" name = "Date"><br>
輸入時間：
<input type = "text" name = "Time"><br>
輸入座位：
<input type = "text" name = "Seat"><br>
輸入Ssn：
<input type = "text" name = "Ssn"><br>
<input type = "submit" value = "確定"><br>
</form>




<form action = "bus.php">
<input type = "submit" value = "返回">
</form>