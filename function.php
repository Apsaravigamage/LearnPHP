<?php
    function newCalc($x){
        $newnr = $x * 0.75;
        echo "Here is 75% of wahat you wroth: ". $newnr;
    }
    $x = 100;
    newCalc($x);

    echo "<br>";

    $a = 10;
    newCalc($a);
?>