<?php include 'connect_db.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Information</title>
    <!-- Bootstrap CSS -->
    <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div  class = "container" >
    <div class="row justify-content-md-center">
    <div class="col col-lg-6">
       
       
    <div class="text-center h3 alert alert-success mb-4 mt-5" role="alert">เพิ่มข้อมูล</div>
   <form action = "insert_sell.php" method ="post">
    <lable>ชื่อ</lable>
    <input type ="text" name ="name" class="form-control" placeholder="ชื่อ" required > 
    <lable>ป้ายทะเบียนรถ</lable>
    <input type ="text" name ="se_num" class="form-control" placeholder="ป้ายทะเบียนรถ" required >
    <lable>จังหวัดป้ายทะเบียน</lable>
    <input type ="text" name ="se_county"  class="form-control" placeholder="จังหวัดป้ายทะเบียน" required>
    <lable>เบอร์โทร</lable>
    <input type ="text" name ="phone" class="form-control" placeholder="เบอร์โทร" required>
    <lable>จำนวนลูกค้า</lable>
    <input type ="number" name ="se_us" class="form-control" placeholder="จำนวนลูกค้า" required>
    <lable>วันที่ทำงาน</lable>
    <input type ="datetime-local" name ="ctime" class="form-control" required >
    <input type="submit" value="submit" class="btn btn-success mt-4">
    <a href= "showseller.php" class="btn btn-danger mt-4">Cancel</a>
    
   </form> 
   </div>
    </div>
</div>
</body>
</html>