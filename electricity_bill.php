<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $billamount=0;
    $bill=110;
    if ($bill<=50){
        $billamount=$bill*3.50;
        echo "The Electricity bill for $bill unit is $billamount-/rs.";
    }
    elseif ($bill<=150){
        $billamount=$bill*4;
        echo "The Electricity bill for $bill unit is $billamount-/rs.";
    }
    elseif ($bill<=250){
        $billamount=$bill*5.20;
        echo "The Electricity bill for $bill unit is $billamount-/rs.";
    }
    else{
        $billamount=$bill*6.50;
        echo "The Electricity bill for $bill unit is $billamount-/rs.";
    }

    ?>
</body>
</html>