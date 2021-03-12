<?php echo $_GET['id'];
 require_once("dbcon.php");
$sql = "SELECT * FROM mv WHERE mid = '{$_GET['id']}'";
$result = $conn->query($sql);
if($result->num_rows > 0 ) {
    $row = $result->fetch_assoc();
}
?>
<h3>แก้ไขภาพยนต์ <small> <a href = ".">ย้อนกลับ</a></h3>
<form action="update.php" method="post">
    <label for="mid">รหัสภาพยนต์</label>
    <?php echo $row['mid'];?>
    <input type = "hidden" name = "mid" id = "mid" value ="<?php echo $row['mid'];?>">
    <br><br>
    <label for="mid">ชื่อภาพยนต์</label>
    <input type ="text" name = "mname" id ="mname"value ="<?php echo $row['mname'];?>">
    <br><br>
    <label for="mid">วัน/เดือน/ปี</label>
    <input type ="date" name = "mday" id ="mday"value ="<?php echo $row['mday'];?>">
    <br><br>
    <label for="mid">เวลา</label>
    <input type ="time" name = "mtime" id ="mtime"value ="<?php echo $row['mtime'];?>">
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>