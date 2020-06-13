<?php

    $A = 123;
    function test(){
        global $a;
        echo "Nilai A dalam fungsi = $A \n";
    }

test();
echo "Nilai A luar fungsi = $A \n";

?>