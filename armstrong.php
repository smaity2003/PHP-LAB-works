<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Armstrong Number Checking</h2>
    <form method="POST">
        Enter a number:<input type="text" name="number">
        <input type="submit" value="check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST['number'];
    $sum = 0;
    $temp = $number;

    while ($temp != 0){
        $remainder = $temp % 10;
        $sum += $remainder*$remainder*$remainder;
        $temp = (int)($temp / 10);
    }
    if($sum == $number){
        echo"<p>$number is an armstrong number.</p>";
    }else{
        echo"<p>$number is not an armstrong number.</p>";
    }

}
?>
</body>
</html>