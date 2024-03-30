<?php
    function staic_var(){
        static $num1 = 50;
        $num2 = 100;
         
        echo "Let's see the result <br>";
        $num1++;
        echo "$num1 <br>";
        $num2++;
        echo "$num2 <br>";


    }
    staic_var(); //prothim bar call eta increment korbe..
    staic_var();  // abar ekbar call ekhane amra dekhboo j non static ta change hoochhe na.
?>