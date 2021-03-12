<?php
    echo $_POST['mid'].'<br>';
    echo $_POST['mname'].'<br>';
    echo $_POST['mday'].'<br>';
    echo $_POST['mtime'].'<br>';
require_once("dbcon.php");
$sql = "INSERT INTO mv (mid, mname,mday,mtime)
VALUES ('{$_POST['mid']}','{$_POST['mname']}', '{$_POST['mday']}','{$_POST['mtime']}}')";
if ($conn->query($sql) === TRUE) {
  echo "บันทึกข้อมูลใหม่เรียบร้อย";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
