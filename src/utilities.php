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

    // echo "<form method='POST' action='delete.php'>";
    // var_dump($data);
    print_r(array_keys($columns));

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
        
        // echo "<input type='checkbox' name='pid'>";
        // echo '<button type="submit">DELETE</button>';
        $id = "0"; //TODO check if id exists

        foreach ($row as $key => $cell) {
            if ($key == 'id') {
                $myid = $cell;
                echo "<td id=".$cell.">".$cell."</td>";
                // echo "<td><input type='checkbox' name='pid'".$cell."></td>";
                echo "<td><form method='POST' action='delete.php'>";
                echo "<button type='submit' name='uid' value=".$cell.">DELETE</button></form></td>";
            } else if ($key == 2) {
                echo "<td><form method='POST' action='update.php'>";
                echo "<input name='content' value=".$cell." >";
                echo "<button type='submit' name='uid' value=".$myid.">UPDATE</button></form></td>";
            } else {
                echo "<td>".$cell."</td>";
            }

        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</form>";
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