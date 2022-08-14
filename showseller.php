<?php
include 'connect_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sellert</title>
    <!-- Bootstrap CSS -->
    <link href="bootstarp/css/bootstrap.min.css" rel="stylesheet" >
    
</head>
<body>
    <div class ="container">
    <div class="text-center h3 alert alert-success mb-4 mt-5" role="alert">Seller Information</div>
    <a href= "add_seller.php" class="btn btn-success mb-4">เพิ่มข้อมูล</a>
    <table class="table table-striped">
        <tr>
            <th>รหัส</th>
            <th>ชื่อ</th>
            <th>ทะเบียนรถ</th>
            <th>จังหวัดป้ายทะเบียน</th>
            <th>เบอร์โทร</th>
            <th>จำนวนลูกค้า</th>
            <th>วันที่ทำงาน</th>
            <th>อัพเดทล่าสุด</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php 
        $sql="SELECT * FROM  seller ";
        $result=mysqli_query($conn, $sql);
        
        while($row=mysqli_fetch_array($result)){
           
        ?>
            <tr>
                <td><?php echo $row['se_id']?></td>
                <td><?php echo $row['se_name']?></td>
                <td><?php echo $row['se_vehicle_number']?></td>
                <td><?php echo $row['se_vehicle_county']?></td>
                <td><?php echo $row['se_phone']?></td>
                <td><?php echo $row['se_us_id']?></td>
                <td><?php echo $row['se_created_at']?></td>
                <td><?php echo $row['se_updated_at']?></td>
                <td><a href= "edit_sell.php?id=<?php echo $row['se_id']?>" class="btn btn-warning">Edit</a> </td>
                <td><a href= "delete_sell.php?id=<?php echo $row['se_id']?>" class="btn btn-danger" onclick="Del(this.href);return false;">Delete</a> </td>
                

</tr>
<?php
}
 mysqli_close($conn); // close a connect data
?>

    </table>

</div>
</body>
</html>

<script language="Javascript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่?");
        if(agree){
            window.location=mypage;
        }
    }
</script>