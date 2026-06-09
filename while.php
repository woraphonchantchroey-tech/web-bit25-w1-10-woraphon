<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; justify-content: center;">
    <h1 style="color: red;">งานที่ 1 วรพล จันทร์เจริญ BIT.2/5 เลขที่10</h1>
    
      <a href="index.php">While Loop</a>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">
        
        <input type="submit" value="คำนวณ">
    </form>
<?php

$i = 1;
while($i <= 12){
    echo $i;
    $i++;
}
echo "<br>";

$i = 5;
while($i >=1){
    echo $i;
    $i--;
}
echo "<br>";

$date = ["a", "b", "c", "d"];
$i = 0;
while($i < count($date)){
    echo $date[$i];
    $i++;
}
