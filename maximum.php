<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        width: 500px;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #9c039c;

    }
    </style>
<body>
    <div class="container">
        <div class="formBox">
            <form action="" method="POST">
            <h3>Enter any numbers</h3>
            <input type="number" name="first" placeholder="Enter first number.."required>
            <br><br>
            <input type="number" name="second" placeholder="Enter second number.."required>
            <br><br>
            <input type="number" name="third" placeholder="Enter third number.."required>
            <br><br>
            <button type="submit">check max</button>
            <div class="result">
                <?php
                $first = $_POST['first'];
                $second = $_POST['second'];
                $third = $_POST['third'];

                if($first > $second && $first > $third){
                    echo "Large number is : $first";
                }elseif($second > $first && $second > $third){
                    echo "Large number is : $second";
                }else{
                    echo"Large number is : $third";
                }
                ?>
</form>
</div>
</div>

</body>
</html>