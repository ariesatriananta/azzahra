<?php
#echo formatMoney(1050); # 1,050
#echo formatMoney(1321435.4, true); # 1,321,435.40
#echo formatMoney(10059240.42941, true); # 10,059,240.43
#echo formatMoney(13245); # 13,245

function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) { 
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1.$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}
?>