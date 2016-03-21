<?php

for($i=1; $i < 30; $i++){

    echo "On day". $i."the following items are available:";
    $y = 1;

    if($i % 2 == 0){

        echo "Mugs";
        $y = 1;
    }

    if($i % 3 == 0){

        echo "hugs";
        $y = 1;
    }

    if($i % 4 == 0){

        echo "tugs";
        $y = 1;
    }

    echo "<p>";
}

?>