<?php 
// เชื่อมฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจาก registerCus.php ลงในตัวแปร
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$product = implode(",",$_POST["product"]);

// บันทึกข้อมูล
$sql = "INSERT INTO customers(Fname,Lname,product) VALUES('$Fname','$Lname','$product')";

$check = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
        body {
            padding: 0;
            margin: 0;
            font-family: 'Kanit', sans-serif;
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

    </style>
    <div>
        <h1>สั่งซื้อสินค้าเรียบร้อยแล้ว</h1>
        <a href='index.php' class="btn btn-primary">กลับหน้าแรก</a>
    </div>
</body>
</html>