<?php
    require('dbconnect.php');
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://css.gg/trash.css' rel='stylesheet'>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
        body {
            font-family: 'Kanit', sans-serif;
            background-image: url('image/fruitbg.jpg');
            background-repeat: no-repeat;
            background-size: cover;

        }
        .container {
            width: 1500px;
            background : white;
            margin: 30px auto;
            padding: 30px;
            z-index: 100;
        }

        .btn {
            text-align: center;
        }

    </style>
    <!-- ลิ้งเชื่อมไปหน้า register พนักงาน -->
    <div class="container my-5">
        <h2 class="text-center">ข้อมูลลูกค้าที่สั่งซื้อน้ำผลไม้</h2>
        
        <form action="deleteCus.php" method="POST">
            <label for="">รหัสลูกค้า</label>
            <input type="text" placeholder="ป้อนรหัสลูกค้าเพื่อลบ" name="id" class="form-control">
            <input type="submit" value="delete" class="btn btn-danger" style="margin: 10px 0px">
        </form>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>รหัสลูกค้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>เมนูที่สั่ง</th>
                    <th>ลบข้อมูล</th>
                </tr>
                
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["Fname"];?></td>
                    <td><?php echo $row["Lname"];?></td>
                    <td><?php echo $row["product"];?></td>
                    <td>
                        <a href="deleteCus2.php?id=<?php echo $row["id"];?>" class="btn btn-danger">
                            <i class="gg-trash"></i>
                            <!-- delete -->
                        </a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <a href="registerCus.php" class="btn btn-success">สั่งซื้อสินค้า</a>
    </div>
</body>
</html>