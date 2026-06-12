<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมสูตรคูณ - วรพล</title>
    <style>
        /* จัด body ให้เป็น Flexbox และดันทุกอย่างให้อยู่ตรงกลางหน้าจอพอดี */
        body {
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;  /* จัดกึ่งกลางแนวนอน */
            align-items: center;      /* จัดกึ่งกลางแนวตั้ง */
            min-height: 100vh;        /* ให้ความสูงเท่ากับหน้าจอพอดี */
            background-color: #04bbe4;
            flex-direction: column;
        }

        /* เพิ่มกล่องข้อความสีขาวครอบไว้เพื่อความสวยงามและเป็นระเบียบ */
        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            min-width: 250px;
            
        }

        input[type="number"] {
            padding: 8px;
            width: 80px;
            text-align: center;
            margin: 10px 0;
            border-radius: 5px;
            
            
        }
        input[type="submit"]{
            padding: 10px 20px;
            background-color: #08a3c6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .result {
            margin-top: 15px;
            text-align: center;
            line-height: 1.5;
            
        }
    </style>
</head>
<body>

    <div class="card">
        <h2 style="color: red; margin-top: 0;">งานที่ 1 วรพล จันทร์เจริญ BIT.2/5 เลขที่10</h2>

        <a href="while.php">While Loop</a> <br><br>

        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ</label> <br>
            <input type="number" name="num" id="num" required value="<?php echo isset($_GET['num']) ? $_GET['num'] : ''; ?>">
            <br>
            <input type="submit" value="คำนวณ">
        </form>

        <div class="result">
            <?php
                 if(isset($_GET["num"]) && $_GET["num"] !== ""){
                      $num = $_GET["num"];

                      echo "<strong>สูตรคูณแม่ " . $num . "</strong><br><br>";
                    
                      for($i = 1; $i <= 12; $i++){
                          echo $num . " x " . $i . " = ". ($num * $i). "<br>";
                      }
                 }
            ?>
        </div>
    </div>
  
</body>
</html>