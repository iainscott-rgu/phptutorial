<?php

$wantedgoods = "specs";

switch ($wantedgoods){

    case mugs:
        echo "You have to be 18 to buy mugs";
        break;
    case specs:
        echo "You have to be 16 to buy spacs";
        break;
    case rolls:
        echo "You have to be 21 to buy rolls";
        break;
    default: "what have you done???";

}



?>