<?php
require_once("../config/config.php");
function printArr($arr) {
    echo "Processing Array<br>";
    foreach ($arr as $key => $value) {
        echo "\$arr[$key] is " . $key . ", Value=" . $value;
        echo "<br>";
    }
}

function printTable($result, $classesCSS) {
    $data=$result->fetch_all();
    $columns=$result->fetch_fields();

    echo "<table class=$classesCSS>";
    //printing header with column names
    echo "<thead><tr>";
    foreach ($columns as $col) {
        echo "<td>".$col->name."</td>";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>".$cell."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function getRows($sql) {
    $conn = mysqli_connect(SERVER, USER, PW, DB);

    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    // echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    // echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
    // echo "<br>";
    $result = $conn->query($sql);
    mysqli_close($conn);

    return $result;
}