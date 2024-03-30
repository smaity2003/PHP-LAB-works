Write a PHP program to swap two numbers.
Ans: <!DOCTYPE html>
<html>
<head>
    <title>Swap Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            
        }
        input[type="number"] {
            width: 100px;
            padding: 8px;
            margin: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Swap Numbers</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required><br><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        // Swap numbers
        $num1 ^= $num2;
        $num2 ^= $num1;
        $num1 ^= $num2;
        echo "<p>After swapping:</p>";
        echo "<p>Number 1: $num1</p>";
        echo "<p>Number 2: $num2</p>";
    ?>
</div>

</body>
</html>
