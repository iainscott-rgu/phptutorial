<?php

for($i=1; $i < 30; $i++){

    echo "On day". $i."the following items are available:";
    $y = 0;

    if($i % 2 == 0){

        echo "Mugs ";
        $y = 1;
    }

    if($i % 3 == 0){

        echo "Hugs ";
        $y = 1;
    }

    if($i % 4 == 0){

        echo "Tugs ";
        $y = 1;
    }

    if ($y != 1){

        echo "NONE ";
    }

    echo "<p>";
}

?>