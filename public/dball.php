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
    $stmt = $conn->prepare("INSERT INTO tracks (name, album, artist) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $mytitle, $myalbum, $myartist); // "sss" means the values are 3 strings (another type is "d" or "f")

    // set parameters and execute
    $mytitle = "Aluminija Cūka";
    $myalbum = "Who Knows";
    $myartist = "Labvelīgais Tips";
    $stmt->execute();

    //This is a simple example without prepared statement
    $sql = "SELECT id,name,album,artist FROM tracks";
    $result = $conn->query($sql);

    $mydata = $result->fetch_all(MYSQLI_ASSOC);
    mysqli_close($conn);

    foreach ($mydata as $key => $row) {
        echo "ROW:$key :";
        // var_dump($row);
        echo $row['name'];
        echo BR;
        echo $row['artist'];
        echo "<hr>";

    }




  





