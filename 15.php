<?php
$a = 1;//изменяемое число
$b = 0;//изменяемое число
$operator = "/";
switch ($operator):
    case "+": echo ($a+$b);break;
    case "-": echo ($a-$b);break;
    case "*": echo ($a*$b);break;
    case "/": if ($b!=0) echo ($a/$b);
              else echo "На ноль делить нельзя";break;
endswitch;