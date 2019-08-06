<?php
function printArr($arr) {
    echo "Processing Array<br>";
    foreach ($arr as $key => $value) {
        echo "\$arr[$key] is " . $key . ", Value=" . $value;
        echo "<br>";
    }
}