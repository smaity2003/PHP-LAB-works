<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   date_default_timezone_set("Asia/Calcutta");
   header("Refresh: 10");
   $d=date('H:i:s');
   echo "<h1>Now Time is : ".$d."</h1>";
    ?>

</body>
</html>