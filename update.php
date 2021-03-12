<h1>อัปเดตภาพยนต์เรียบร้อย </h1>
<?php
   require_once("dbcon.php");
   $sql = "UPDATE mv SET
            mname = '{$_POST['mname']}',
            mday = '{$_POST['mday']}',
            mtime = '{$_POST['mtime']}'
            WHERE mid = '{$_POST['mid']}' ";
   if ($conn->query($sql) === TRUE) {
     echo "ข้อมูลใหม่ถูกบันทึก";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   $conn->close();
?>