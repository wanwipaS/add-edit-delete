<?php include 'connect_db.php';
$id=$_GET['id'];

$sql="SELECT * FROM seller WHERE se_id = '$id' ";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
    <!-- Bootstrap CSS -->
    <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class = "container">
    <div class="row justify-content-md-center">
    <div class="col col-lg-6">
       
       
    <div class="text-center h3 alert alert-success mb-4 mt-5" role="alert">แก้ไขข้อมูล</div>
   <form action = "update_sell.php" method ="post">

    <lable>รหัสสมาชิก</lable>
    <input type ="text" name ="id_sell" class="form-control" readonly value=<?=$row['se_id']?> >
    <lable>ชื่อ</lable>
    <input type ="text" name ="name" class="form-control" value=<?=$row['se_name']?> >
    <lable>ป้ายทะเบียนรถ</lable>
    <input type ="text" name ="se_num" class="form-control" value=<?=$row['se_vehicle_number']?> >
    <lable>จังหวัดป้ายทะเบียน</lable>
    <input type ="text" name ="se_county"  class="form-control" value=<?=$row['se_vehicle_county']?> >
    <lable>เบอร์โทร</lable>
    <input type ="text" name ="phone" class="form-control" value=<?=$row['se_phone']?> >
    <lable>จำนวนลูกค้า</lable>
    <input type ="number" name ="se_us" class="form-control" value=<?=$row['se_us_id']?> >
    
    <lable>วันที่อัพเดท</lable>
    <input type ="datetime-local" name ="uptime" class="form-control"  value=<?=$row['se_updated_at']?> required >
    <input type="submit" value="update" class="btn btn-success mt-4">
    <a href= "showseller.php" class="btn btn-danger mt-4">Cancel</a>
    
   </form> 
   </div>
    </div>
</div>
</body>
</html>