<?php include 'connect_db.php';

$id=$_POST['id_sell'];
$name = $_POST['name'];
$se_num = $_POST['se_num'];
$se_county = $_POST['se_county'];
$phone = $_POST['phone'];
$se_us = $_POST['se_us'];
$uptime = $_POST['uptime'];

$sql="UPDATE seller set se_name='$name', se_vehicle_number='$se_num', se_vehicle_county='$se_county',
 se_phone='$phone', se_us_id='$se_us', se_updated_at='$uptime' WHERE se_id='$id' ";

$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='showseller.php';</script>";

}else{
    echo "<script>alert('ไม่สามารถแก้ข้อมูลได้');</script>";
    echo "<script>window.location='add_seller.php';</script>";
}
mysqli_close($conn);
?>