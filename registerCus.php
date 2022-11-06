<!-- กดบันทึกข้อมูลลูกค้า หน้าหลัก มาหน้านี้ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Customer</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="RegisCss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>

    <div class="container my-5">
        <h2 class="text-center">แบบฟอร์มสั่งซื้อน้ำผลไม้</h2>
        <!-- action ข้อมูลออกไปที่ xampp -->
        <form action="insertData.php" method="POST">
            <div class="my-3">
                <label for="firstname">ชื่อ</label>
                <input type="text" placeholder="ป้อนชื่อ" name="Fname" id="" class="form-control">
            </div>
            <div class="my-3">
                <label for="lastname">นามสกุล</label>
                <input type="text" placeholder="ป้อนนามสกุล" name="Lname" id="" class="form-control">
            </div>
            <div class="my-3">
                <label for="product">เมนูที่สั่ง</label>
                <span class="firstCol">
                    <div class="box">
                        <div class="img">
                            <img src="image/straw.png" alt="">
                        </div>
                        <div class="checkbox">
                            <input class="form-check-input mt-0" type="checkbox" name="product[]" value="Strawberry Smoothie">Strawberry Smoothie
                        </div>
                    </div>

                    <div class="box">
                        <div class="img">
                            <img src="image/orange.png" alt="">
                        </div>
                        <div class="checkbox">
                            <input class="form-check-input mt-0" type="checkbox" name="product[]" value="Orange Smoothie">Orange Smoothie
                        </div>
                    </div>

                    <div class="box">
                        <div class="img">
                            <img src="image/avocado.png" alt="">
                        </div>
                        <div class="checkbox">
                            <input class="form-check-input mt-0" type="checkbox" name="product[]" value="Avocado Smoothie">Avocado Smoothie
                        </div>
                    </div>
                </span> 
            </div>
            
            <div class="gap">
                <input type="submit" value="บันทึก" class="btn btn-success">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
                <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
            </div>
            
        </form>
    </div>

    
</body>
</html>