<?php
$age = "28";
if (is_numeric($age)) {
    if ($age >= 0) {
        if (($age >= 18) && ($age <= 59)) {
            echo "Вам еще работать и работать";
        } elseif ($age > 59) {
            echo "Вам пора на пенсию";
        } elseif ($age < 18) {
            echo "Вам еще рано работать";
        }
    }
} else {
    echo "Строка не содержит числового значения";
}