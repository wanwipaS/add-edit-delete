<?php include 'connect_db.php'; 

$name = $_POST['name'];
$se_num = $_POST['se_num'];
$se_county = $_POST['se_county'];
$phone = $_POST['phone'];
$se_us = $_POST['se_us'];
$ctime = $_POST['ctime'];



$sql ="INSERT INTO seller (se_name, se_vehicle_number, se_vehicle_county, se_phone, se_us_id, se_created_at) 
VALUES ('$name','$se_num','$se_county','$phone','$se_us','$ctime') " ;

$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showseller.php';</script>";

}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    echo "<script>window.location='add_seller.php';</script>";
}
mysqli_close($conn);
?>