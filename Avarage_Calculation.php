<?php
    $Point_1 = 50;
    $Point_2 = 75;
    $Point_3 = 40;

    $Avarage_Point = ($Point_1 + $Point_2 + $Point_3) / 3;

    if($Avarage_Point >= 50)
    {
        echo "Tebrikler, Dersi <font color = Red><b>Geçtiniz</b></font>";
    }
    else
    {
        echo "Yazık Kafana, Dersi Geçemedin";
    }
?>