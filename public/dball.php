<?php
    require_once("../config/config.php");
    $conn = mysqli_connect(SERVER, USER, PW, DB);

    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
    echo "<br>";

    // prepare and bind
    // $stmt = $conn->prepare("INSERT INTO tracks (name, album, artist) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $mytitle, $myalbum, $myartist); // "sss" means the values are 3 strings (another type is "d" or "f")

    // // set parameters and execute
    // $mytitle = "Aluminija Cūka";
    // $myalbum = "Who Knows";
    // $myartist = "Labvelīgais Tips";
    // $stmt->execute();

    //This is a simple example without prepared statement
    // $sql = "SELECT id,name,album,artist FROM tracks";
    $sql = "SELECT * FROM tracks";
    $result = $conn->query($sql);

    $mydata = $result->fetch_all(MYSQLI_ASSOC);
    $columnNames = $result->fetch_fields();
    mysqli_close($conn);

    // var_dump($columnNames);
    //table starts here
    echo "<table class='mytablestyle' style='border: 2px solid black' >";
    $isHeaderDone = FALSE;
    //printing header with column names
    echo "<thead><tr>";
    foreach ($columnNames as $col) {
        echo "<td>".$col->name."</td>";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    foreach ($mydata as $row) {
        // if (!$isHeaderDone) {
        //     echo "<thead><tr>";
        //     foreach ($row as $key => $cell) {
        //         echo "<td>".$key."</td>";
        //     }
        //     echo "</tr></thead>";
        //     $isHeaderDone = TRUE;
        //     echo "<tbody>";
        // }
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>".$cell."</td>";
        }
        echo "</tr>";
    }
    // if ($isHeaderDone) echo "</tbody>";
    echo "</tbody>";
    echo "</table>";

    var_dump($mydata);




  





