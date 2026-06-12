<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมสูตรคูณ (While Loop) - วรพล</title>
    <style>
        /* คงความสวยงามและจัดกึ่งกลางหน้าจอแบบเดิมที่คุณวรพลเขียนไว้ */
        body {
            margin: 0;
            padding: 20px; /* เพิ่ม padding เล็กน้อยเผื่อกรณีสูตรคูณยาวทะลุจอในมือถือ */
             
            display: flex;
            justify-content: center;  
            align-items: center;      
            min-height: 100vh;        
            background-color: #08a3c6;
        }

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
            border: 1px solid #ccc;
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

        <a href="index.php"> For Loop</a> <br><br>

        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ </label> <br>
            <input type="number" name="num" id="num" required value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>">
            <br>
            <input type="submit" value="คำนวณ">
        </form>

        <div class="result">
            <?php
                 if(isset($_GET["num"]) && $_GET["num"] !== ""){
                      $num = intval($_GET["num"]); // ปรับให้ปลอดภัยขึ้น

                      echo "<strong>สูตรคูณแม่ " . $num . "</strong><br><br>";
                    
                      // --- เริ่มต้นการใช้ While Loop ---
                      $i = 1; // 1. กำหนดค่าเริ่มต้นของตัวนับ
                      
                      while($i <= 12) { // 2. ตรวจสอบเงื่อนไขว่าตัวนับไม่เกิน 12
                          echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
                          
                          $i++; // 3. เพิ่มค่าตัวนับขึ้นทีละ 1 ในแต่ละรอบ
                      }
                      // ---------------------------------
                 }
            ?>
        </div>
    </div>
  
</body>
</html>

