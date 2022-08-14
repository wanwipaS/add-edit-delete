<?php include 'connect_db.php';

$ids = $_GET['id'];
$sql = "DELETE FROM seller WHERE se_id =' $ids ' ";

 if(mysqli_query($conn,$sql)) {
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showseller.php';</script>";
 }else {
    echo "Error : ".$sql."<br>".mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
 }

 mysqli_close($conn);
?>