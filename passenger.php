查詢旅客基本資料：<br>
輸入Ssn：
<form action = "passenger_data.php" method = "post">
<input type = "text" name = "Ssb_input">
<input type = "submit" value = "確定">
</form>

新增旅客基本資料：<br>
<form action = "passenger_add.php" method = "post">
輸入姓名：
<input type = "text" name = "Name"><br>
輸入Ssn：
<input type = "text" name = "Ssn"><br>
輸入電話：
<input type = "text" name = "Phone"><br>
輸入客服人員ID：
<input type = "text" name = "S_id"><br>
<input type = "submit" value = "確定">
</form>

修改旅客基本資料：<br>
<form action = "passenger_modify.php" method = "post">
變更項目：<br>
輸入原姓名：
<input type = "text" name = "Name"><br>
輸入原Ssn：
<input type = "text" name = "Ssn"><br>
輸入原電話：
<input type = "text" name = "Phone"><br>
輸入原客服人員ID：
<input type = "text" name = "S_id"><br><br>

變更內容：<br>
輸入修改姓名：
<input type = "text" name = "Name_modify"><br>
輸入修改Ssn：
<input type = "text" name = "Ssn_modify"><br>
輸入修改電話：
<input type = "text" name = "Phone_modify"><br>
輸入修改客服人員ID：
<input type = "text" name = "S_id_modify"><br>
<input type = "submit" value = "確定">
</form>

刪除旅客基本資料：<br>
<form action = "passenger_del.php" method = "post">
輸入姓名：
<input type = "text" name = "Name"><br>
輸入Ssn：
<input type = "text" name = "Ssn"><br>
輸入電話：
<input type = "text" name = "Phone"><br>
輸入客服人員ID：
<input type = "text" name = "S_id"><br>
<input type = "submit" value = "確定"><br>
</form>

<form action = "bus.php">
<input type = "submit" value = "返回">
</form>