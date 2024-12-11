<!-- <?php

# $a="$winner";
# $b="/$Looser";
# echo $a,$b;

?> -->
<?php
$a=13;
$b=03;
if ($a > $b) {
    echo "a is greater than b";
} elseif ($a == $b) {
    echo "a is equal to b \r\n";
} else {
    echo "a is less than b \r\n";
}

$i=0;
switch($i){
    case 1:
        echo "Monday\r\n";
        break;
    case 2:
        echo "Tuesday\r\n";
        break;
    case 3:
        echo "Wednesday\r\n";
        break;
    case 4:
        echo "Thursday\r\n";
        break;
    case 5:
        echo "Friday\r\n";
        break;
    case 6:
        echo "Saturday\r\n";
        break;
    case 7:
        echo "Sunday\r\n";
        break;
    default:
        echo "Invalid day \r\n";
        break;
}

?>