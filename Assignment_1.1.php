<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .from{
            /* border:1 px solid red; */
            /* background-color: aqua; */

        }
        body{
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            margin-top: 50px;
        }
        input[type="text"]{
                padding: 10px;
                margin: 10px;
                border-radius: 5px;
                border: 1px solid red;
        }
        button{
            height:38px;
            border-radius: 5px;
            background-color: aqua;
            cursor: pointer;

        }


    </style>
</head>
<body>
<div class="from">
    <h2>enter your name </h2>
    <form method="post">
       <input type="text" name="name" placeholder="search name">
       <button>Submit</button>
    </form>

</div>
<?php 
$name = $_POST['name'];
echo "<h2>hello, $name!</h2>";

?>
</body>
</html>